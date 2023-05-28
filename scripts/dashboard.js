function redirectToPage(id) {
    if (id === 'categoryPackage') {
        window.location.href = "../php/packages.php"
    }
    else if (id === 'categoryFood') {
        window.location.href = "../php/foodNbeverages.php"
    }
    else if (id === 'categoryMedicine') {
        window.location.href = "../php/medicine.php"
    }
    else if (id === 'deliveryPage') {
        window.location.href = "../php/deliveryPage.php"
    }
}
