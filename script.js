document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('search');
    const suggestionsDiv = document.getElementById('suggestions');
    const menuBtn = document.getElementById('menu-btn');
    const closeMenuBtn = document.getElementById('close-menu-btn');
    const fullscreenMenu = document.getElementById('fullscreen-menu');

    // Dynamische Suche
    searchInput.addEventListener('input', async (e) => {
        const query = e.target.value;

        if (query.length > 0) {
            const response = await fetch(`/php/search.php?q=${encodeURIComponent(query)}`);
            const results = await response.json();

            suggestionsDiv.innerHTML = results
                .map(item => `<div onclick="window.location.href='${item.hyperlink}'">${item.title}</div>`)
                .join('');
        } else {
            suggestionsDiv.innerHTML = '';
        }
    });

    // Menü öffnen
    menuBtn.addEventListener('click', () => {
        fullscreenMenu.classList.add('open');
    });

    // Menü schließen
    closeMenuBtn.addEventListener('click', () => {
        fullscreenMenu.classList.remove('open');
    });
});
