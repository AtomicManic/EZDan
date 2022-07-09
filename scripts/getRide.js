function showRideInformation(data) {
  // line and road information
  document.getElementById('departure').innerHTML = data.line.departure;
  document.getElementById('lineNumber').innerHTML = data.line.number;
  document.getElementById('station').innerHTML = data.line.departure;

  // grades information
  const grades = data.grades;
  const congestionChildren =
    document.getElementById('congestionGrade').children;
  const noiseChildren = document.getElementById('noisGrade').children;
  const wheelCahirChildren = document.getElementById('wheelChairSeat').children;
  const seatsAvailable = document.getElementById('availableSeats').children;

  congestionChildren[0].innerHTML = grades[0].name;
  noiseChildren[0].innerHTML = grades[1].name;
  wheelCahirChildren[0].innerHTML = grades[2].name;
  seatsAvailable[0].innerHTML = grades[3].name;

  for (let i = 0; i < grades[0].icons.length; i++) {
    congestionChildren[1].classList.add(grades[0].icons[i]);
  }
  for (let i = 0; i < grades[1].icons.length; i++) {
    noiseChildren[1].classList.add(grades[1].icons[i]);
  }
  for (let i = 0; i < grades[2].icons.length; i++) {
    wheelCahirChildren[1].classList.add(grades[2].icons[i]);
  }
  for (let i = 0; i < grades[3].icons.length; i++) {
    seatsAvailable[1].classList.add(grades[3].icons[i]);
  }

  congestionChildren[2].innerHTML = grades[0].grade;
  noiseChildren[2].innerHTML = grades[1].grade;
  wheelCahirChildren[2].innerHTML = grades[2].isAvailable;
  seatsAvailable[2].innerHTML = grades[3].seatsAvailable;

  document.getElementById('totalScore').innerHTML = data.totalScore;
}
fetch('data/ride.json')
  .then((response) => response.json())
  .then((data) => showRideInformation(data));
