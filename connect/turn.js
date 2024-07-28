//@Light_Phoneixx
const toggleButton = document.getElementById("theme-toggle");
    const body = document.body;

        toggleButton.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            toggleButton.innerText = body.classList.contains('dark-mode') ? 'تغییر به  سیاهی' : 'تغییر به روشنی';
});