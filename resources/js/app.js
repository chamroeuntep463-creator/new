import 'flowbite';

// Particle Canvas Animation
document.addEventListener('DOMContentLoaded', () => {
    initParticles();
    initAnimatedCounters();
    initSpotlightEffect();
    initHeroTypewriter();
});

// Re-init on Livewire navigate if enabled
document.addEventListener('livewire:navigated', () => {
    initParticles();
    initAnimatedCounters();
    initSpotlightEffect();
    initHeroTypewriter();
});

function initParticles() {
    const canvas = document.getElementById('cyber-particles');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');
    let width = (canvas.width = window.innerWidth);
    let height = (canvas.height = window.innerHeight);

    window.addEventListener('resize', () => {
        width = canvas.width = window.innerWidth;
        height = canvas.height = window.innerHeight;
    });

    const particles = [];
    const particleCount = Math.min(Math.floor(window.innerWidth / 20), 65);

    class Particle {
        constructor() {
            this.x = Math.random() * width;
            this.y = Math.random() * height;
            this.vx = (Math.random() - 0.5) * 0.6;
            this.vy = (Math.random() - 0.5) * 0.6;
            this.radius = Math.random() * 2 + 1;
            this.color = Math.random() > 0.5 ? 'rgba(56, 189, 248, ' : 'rgba(168, 85, 247, ';
            this.alpha = Math.random() * 0.5 + 0.2;
        }

        update() {
            this.x += this.vx;
            this.y += this.vy;

            if (this.x < 0 || this.x > width) this.vx *= -1;
            if (this.y < 0 || this.y > height) this.vy *= -1;
        }

        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
            ctx.fillStyle = this.color + this.alpha + ')';
            ctx.shadowBlur = 10;
            ctx.shadowColor = this.color.includes('56') ? '#38bdf8' : '#a855f7';
            ctx.fill();
            ctx.shadowBlur = 0;
        }
    }

    for (let i = 0; i < particleCount; i++) {
        particles.push(new Particle());
    }

    let mouse = { x: null, y: null, radius: 120 };

    window.addEventListener('mousemove', (e) => {
        mouse.x = e.clientX;
        mouse.y = e.clientY;
    });

    window.addEventListener('mouseleave', () => {
        mouse.x = null;
        mouse.y = null;
    });

    function animate() {
        ctx.clearRect(0, 0, width, height);

        for (let i = 0; i < particles.length; i++) {
            particles[i].update();
            particles[i].draw();

            // Connect nearby particles
            for (let j = i + 1; j < particles.length; j++) {
                const dx = particles[i].x - particles[j].x;
                const dy = particles[i].y - particles[j].y;
                const dist = Math.sqrt(dx * dx + dy * dy);

                if (dist < 130) {
                    ctx.beginPath();
                    ctx.moveTo(particles[i].x, particles[i].y);
                    ctx.lineTo(particles[j].x, particles[j].y);
                    ctx.strokeStyle = `rgba(56, 189, 248, ${0.15 * (1 - dist / 130)})`;
                    ctx.lineWidth = 0.8;
                    ctx.stroke();
                }
            }

            // Connect to mouse
            if (mouse.x !== null && mouse.y !== null) {
                const dx = particles[i].x - mouse.x;
                const dy = particles[i].y - mouse.y;
                const dist = Math.sqrt(dx * dx + dy * dy);

                if (dist < mouse.radius) {
                    ctx.beginPath();
                    ctx.moveTo(particles[i].x, particles[i].y);
                    ctx.lineTo(mouse.x, mouse.y);
                    ctx.strokeStyle = `rgba(168, 85, 247, ${0.3 * (1 - dist / mouse.radius)})`;
                    ctx.lineWidth = 1.2;
                    ctx.stroke();
                }
            }
        }

        requestAnimationFrame(animate);
    }

    animate();
}

function initAnimatedCounters() {
    const counters = document.querySelectorAll('[data-counter-target]');
    if (!counters.length) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const target = parseInt(el.getAttribute('data-counter-target'), 10);
                    const suffix = el.getAttribute('data-counter-suffix') || '';
                    const duration = 1500;
                    let startTime = null;

                    function count(timestamp) {
                        if (!startTime) startTime = timestamp;
                        const progress = Math.min((timestamp - startTime) / duration, 1);
                        const current = Math.floor(progress * target);
                        el.innerText = current + suffix;

                        if (progress < 1) {
                            requestAnimationFrame(count);
                        } else {
                            el.innerText = target + suffix;
                        }
                    }

                    requestAnimationFrame(count);
                    observer.unobserve(el);
                }
            });
        },
        { threshold: 0.2 }
    );

    counters.forEach((c) => observer.observe(c));
}

function initSpotlightEffect() {
    const cards = document.querySelectorAll('.spotlight-card');
    cards.forEach((card) => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            card.style.setProperty('--mouse-x', `${x}px`);
            card.style.setProperty('--mouse-y', `${y}px`);
        });
    });
}

function initHeroTypewriter() {
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }

    const elements = document.querySelectorAll('[data-typewriter]');
    elements.forEach((el) => {
        if (el.dataset.typewriterInitialized === 'true') return;
        el.dataset.typewriterInitialized = 'true';

        const fullText = el.getAttribute('data-typewriter') || el.textContent.trim();
        const chars = Array.from(fullText);
        let index = chars.length;
        let isDeleting = true;

        function step() {
            if (!document.body.contains(el)) return;

            if (isDeleting) {
                index--;
                el.textContent = index > 0 ? chars.slice(0, index).join('') : '\u200B';

                if (index <= 0) {
                    isDeleting = false;
                    setTimeout(step, 350);
                } else {
                    setTimeout(step, 110);
                }
            } else {
                index++;
                el.textContent = chars.slice(0, index).join('');

                if (index >= chars.length) {
                    isDeleting = true;
                    setTimeout(step, 1800);
                } else {
                    setTimeout(step, 140);
                }
            }
        }

        setTimeout(step, 1200);
    });
}