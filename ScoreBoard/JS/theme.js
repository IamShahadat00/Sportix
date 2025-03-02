function theme() {
    const element = document.body;
    element.classList.toggle("dark-mode");
    const btn = document.getElementById('theme');
    btn.innerHTML = element.classList.contains("dark-mode") ? "☀️ Light Mode" : "🌙 Dark Mode";
}