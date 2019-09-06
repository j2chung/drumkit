function drum01play() {
  let audio = document.getElementById("drum01");
  audio.play();
}

function clap2play() {
  let audio = document.getElementById("clap2");
  audio.play();
}

function clapRepeat() {
  let audio = document.getElementById("clap2");
  let checkBox = document.getElementById("clapCheck");
  let range = document.getElementById("myRange");
  let rangeValue = range.value;
  while(checkBox.checked == true) {
    setInterval(clap2play(),5000/rangeValue);
  }
}
