function handleItems(label, price) {
  document.getElementById('ItemName').value = label
  document.getElementById('ItemPrice').value = price
  document.getElementById('Quantity').value = 1
}
function handleCalculator() {
    document.getElementById('Cash').value = eval(document.getElementById('Cash').value)
}