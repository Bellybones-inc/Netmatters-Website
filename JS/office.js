

const camMap = L.map('map1').setView([52.2347, -0.1531], 10);
const norMap = L.map('map2').setView([52.5754, 1.1368], 10);
const yarMap = L.map('map3').setView([52.5563, 1.7144], 10);


  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(camMap);

  var marker = L.marker([52.2347, -0.1531]).addTo(camMap);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(norMap);

  var marker = L.marker([52.5754, 1.1368]).addTo(norMap);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(yarMap);

    var marker = L.marker([52.5563, 1.7144]).addTo(yarMap);
