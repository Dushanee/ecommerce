const propic = document.getElementById('propic');
const popup = document.getElementById('profile-popup');

propic.addEventListener('click', () => {
    if (popup.style.display === 'none') {
        popup.style.display = 'block';
    } else {
        popup.style.display = 'none';
    }
});
