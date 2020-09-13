function doMath() {
  document.getElementById("answer").innerHTML = eval(
    document.getElementById("input").value.replace("^", "**")
  );
}
