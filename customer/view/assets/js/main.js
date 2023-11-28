var rangeInput = document.getElementById("customRange3");

// Add an event listener for the 'input' event
rangeInput.addEventListener("input", function () {
  // Get the current value of the range input
  var currentValue = rangeInput.value;

  // Log the current value to the console (you can do something else with it)
  document.getElementById("choice_price").innerHTML = currentValue;
});

// rangeInput.onmouseup = function () {
//   window.location.href = "../app/index.php?item_list&&category_id=1";
// };

function getPrice(href) {
  window.location.href = href + rangeInput.value;
}
