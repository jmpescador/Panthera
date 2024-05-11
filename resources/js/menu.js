document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('btn-menu').addEventListener('click', (event) => {

        document.getElementById('btn-menu').classList.toggle('active');
        document.getElementById('menu').classList.toggle('active');
    })
    
} )