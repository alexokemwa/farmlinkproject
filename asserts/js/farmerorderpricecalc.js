
function calculate() {
  const input1 = parseFloat(document.getElementById('goods_weight').value);

  // Perform the calculation based on input1
  const result = input1 * 10;

  // Update the result field
  document.getElementById('total_price').value = result;
}
