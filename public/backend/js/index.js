// Select the product category link
const productCategory = document.getElementById('product-category');

// Add event listener for click event
productCategory.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default link behavior

    // Toggle the 'active' class on the clicked item
    productCategory.classList.toggle('active');
});
