(() => {
  const canvas = document.getElementById('dmStarfield');
  if (!canvas) return;

  const ctx = canvas.getContext('2d', { alpha: true });
  if (!ctx) return;

  const DPR = Math.max(1, Math.min(2, window.devicePixelRatio || 1));
  let w = 0;
  let h = 0;

  const rand = (min, max) => min + Math.random() * (max - min);

  let stars = [];
  const makeStars = () => {
    const count = Math.floor((w * h) / 28000);
    stars = Array.from({ length: Math.max(80, Math.min(220, count)) }, () => ({
      x: rand(0, w),
      y: rand(0, h),
      r: rand(0.6, 1.8),
      vx: rand(-0.08, 0.08),
      vy: rand(0.02, 0.12),
      a: rand(0.15, 0.65),
      tw: rand(0.002, 0.008),
      ph: rand(0, Math.PI * 2),
    }));
  };

  const resize = () => {
    w = Math.floor(window.innerWidth);
    h = Math.floor(window.innerHeight);
    canvas.width = Math.floor(w * DPR);
    canvas.height = Math.floor(h * DPR);
    canvas.style.width = `${w}px`;
    canvas.style.height = `${h}px`;
    ctx.setTransform(DPR, 0, 0, DPR, 0, 0);
    makeStars();
  };

  const draw = () => {
    ctx.clearRect(0, 0, w, h);

    // 轻薄雾状底色
    const g = ctx.createRadialGradient(w * 0.55, h * 0.25, 10, w * 0.55, h * 0.25, Math.max(w, h) * 0.9);
    g.addColorStop(0, 'rgba(124,58,237,0.06)');
    g.addColorStop(0.5, 'rgba(34,211,238,0.04)');
    g.addColorStop(1, 'rgba(0,0,0,0)');
    ctx.fillStyle = g;
    ctx.fillRect(0, 0, w, h);

    // 星点
    for (const s of stars) {
      s.x += s.vx;
      s.y += s.vy;
      if (s.x < -20) s.x = w + 20;
      if (s.x > w + 20) s.x = -20;
      if (s.y > h + 20) s.y = -20;

      s.ph += s.tw * 60;
      const alpha = Math.max(0.05, Math.min(0.9, s.a + Math.sin(s.ph) * 0.18));

      ctx.beginPath();
      ctx.fillStyle = `rgba(255,255,255,${alpha})`;
      ctx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
      ctx.fill();
    }

    // 少量“弹幕”光丝（非常轻）
    ctx.save();
    ctx.globalCompositeOperation = 'lighter';
    for (let i = 0; i < 6; i++) {
      const y = (h * 0.18) + i * (h * 0.11) + Math.sin((performance.now() / 1200) + i) * 18;
      const x1 = -60;
      const x2 = w + 60;
      const lg = ctx.createLinearGradient(x1, y, x2, y);
      lg.addColorStop(0, 'rgba(34,211,238,0)');
      lg.addColorStop(0.45, 'rgba(34,211,238,0.03)');
      lg.addColorStop(0.55, 'rgba(124,58,237,0.035)');
      lg.addColorStop(1, 'rgba(124,58,237,0)');
      ctx.strokeStyle = lg;
      ctx.lineWidth = 1.2;
      ctx.beginPath();
      ctx.moveTo(x1, y);
      ctx.lineTo(x2, y);
      ctx.stroke();
    }
    ctx.restore();
  };

  let raf = 0;
  const loop = () => {
    draw();
    raf = window.requestAnimationFrame(loop);
  };

  const prefersReduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  resize();
  if (!prefersReduced) loop();

  window.addEventListener('resize', () => {
    window.cancelAnimationFrame(raf);
    resize();
    if (!prefersReduced) loop();
  }, { passive: true });
})();

