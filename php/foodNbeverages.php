<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../scripts/foodNbeverages.js"></script>
    <link rel="stylesheet" href="../styles/foodNbeverages.css">
    <title>Food & Beverages</title>
</head>
<body>
    <div class="header">
        <button onclick="redirectToDashboard()">Back</button>
        <span>Food & Beverages</span>
        <img src="../assets/dashboard/iconCart.png" alt="" onclick="openModal()">
    </div>

    <div class="container">
        <div class="package-card">
            <img src="../assets/foodNbeverages/coke.png" alt="Food 1">
            <h3>Food 1</h3>
            <p class="price">₱9.99</p>
            <button onclick="addToOrders('Food 1')">Add to Orders</button>
        </div>

        <div class="package-card">
            <img src="../assets/foodNbeverages/coke.png" alt="Food 2">
            <h3>Food 2</h3>
            <p class="price">₱12.99</p>
            <button onclick="addToOrders('Food 2')">Add to Orders</button>
        </div>

        <div class="package-card">
            <img src="../assets/foodNbeverages/coke.png" alt="Food 3">
            <h3>Food 3</h3>
            <p class="price">₱14.99</p>
            <button onclick="addToOrders('Food 3')">Add to Orders</button>
        </div>

        <div class="package-card">
            <img src="../assets/foodNbeverages/coke.png" alt="Food 4">
            <h3>Food 4</h3>
            <p class="price">₱17.99</p>
            <button onclick="addToOrders('Food 4')">Add to Orders</button>
        </div>

        <!-- Add more package cards as needed -->
    </div>

    <!-- Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Order Details</h2>
                <span class="close" onclick="closeModal()">&times;</span>
            </div>
            <div class="modal-body">
                <ul id="orderList">
                    <!-- Order items will be added dynamically -->
                </ul>
            </div>
            <div class="modal-footer">
                <button onclick="placeOrder()">Place Order</button>
            </div>
        </div>
    </div>

    <script>
        // JavaScript code for modal functionality

        // Get the modal element
        var modal = document.getElementById('modal');

        // Function to open the modal
        function openModal() {
            modal.style.display = 'block';
        }

        // Function to close the modal
        function closeModal() {
            modal.style.display = 'none';
        }

        // Function to add an item to the order list
        function addToOrders(itemName) {
            var orderList = document.getElementById('orderList');
            var listItem = document.createElement('li');
            listItem.classList.add('list-item');
            listItem.textContent = itemName;
            
            var removeButton = document.createElement('button');
            removeButton.textContent = 'Remove';
            removeButton.classList.add('remove-button');
            removeButton.onclick = function() {
                removeFromOrders(listItem);
            };
            listItem.appendChild(removeButton);
            
            orderList.appendChild(listItem);
        }

        // Function to remove an item from the order list
        function removeFromOrders(item) {
            var orderList = document.getElementById('orderList');
            orderList.removeChild(item);
        }

        // Function to place the order
        function placeOrder() {
            // Add your logic here to handle the order placement
            // For example, you can send the order details to the server or perform any other required actions

            // After placing the order, you can clear the order list and close the modal
            var orderList = document.getElementById('orderList');
            orderList.innerHTML = ''; // Clear the order list
            window.location.href = "../php/deliveryPage.php"

            closeModal(); // Close the modal
        }
    </script>

</body>
</html>

