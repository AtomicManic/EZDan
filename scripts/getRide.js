function showRideInformation(data) {
  const rideId = 1; //hard coded here - not from db
  console.log(data);
}

fetch('data/ride.json')
  .then((response) => response.json())
  .then((data) => showRideInformation(data));
