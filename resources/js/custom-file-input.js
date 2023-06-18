// Add an event listener to the custom file button
const customFileButton = document.querySelector('.custom-file-button');
const fileInput = document.querySelector('.file-input');

customFileButton.addEventListener('click', () => {
    fileInput.click(); // Trigger the file input's click event
});
