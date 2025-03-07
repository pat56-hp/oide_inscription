let bodyEl = document.getElementsByTagName("body")[0];
let titleEl = document.getElementById("title");
let minuteurEl = document.getElementById("minuteur");
let messageEl = document.getElementById("message");
let joursEl = document.getElementById("j");
let heuresEl = document.getElementById("h");
let minutesEl = document.getElementById("m");
let secondesEl = document.getElementById("s");
let registerButtonEl = document.getElementById("registerButton");

// Set the event date (format: DD/MM/YYYY)
const eventDateStr = "23/07/2024";

// Parse the event date string to a Date object
const eventDateParts = eventDateStr.split("/");
const eventDate = new Date(`${eventDateParts[2]}-${eventDateParts[1]}-${eventDateParts[0]}T00:00:00`);

// Get the current UTC offset in minutes
const now = new Date();
const dateOffsetInMinutes = now.getTimezoneOffset();

const unJourEnMs = 1000 * 60 * 60 * 24;
const uneHeureEnMs = 1000 * 60 * 60;
const uneMinuteEnMs = 1000 * 60;

const getCountdown = () => {
  const nowDate = Date.now();
  const tempsRestantEnMs = eventDate - nowDate + (dateOffsetInMinutes * uneMinuteEnMs);

  // Calculate days remaining
  const nbJours = Math.floor(tempsRestantEnMs / unJourEnMs);

  // Calculate hours remaining
  const resteTempsSansJoursMs = tempsRestantEnMs - (nbJours * unJourEnMs);
  const nbHeures = Math.floor(resteTempsSansJoursMs / uneHeureEnMs);

  // Calculate minutes remaining
  const resteTempsSansHeuresMs = resteTempsSansJoursMs - (nbHeures * uneHeureEnMs);
  const nbMinutes = Math.floor(resteTempsSansHeuresMs / uneMinuteEnMs);

  // Calculate seconds remaining
  const resteTempsSansMinutesMs = resteTempsSansHeuresMs - (nbMinutes * uneMinuteEnMs);
  const nbSecondes = Math.floor(resteTempsSansMinutesMs / 1000);

  // Update the countdown display
  joursEl.textContent = nbJours;
  heuresEl.textContent = nbHeures;
  minutesEl.textContent = nbMinutes;
  secondesEl.textContent = nbSecondes;

  // Check if the countdown is finished
  if (tempsRestantEnMs <= 0) {
    clearInterval(countDownInterval);
    registerButtonEl.style.display = 'none';  // Hide the button
    joursEl.textContent = 0;
    heuresEl.textContent = 0;
    minutesEl.textContent = 0;
    secondesEl.textContent = 0;
    titleEl.innerHTML = "Le Jour de la Pré-Conférence mondiale";
  }
}

// Initialize the countdown and set an interval to update it every second
const countDownInterval = setInterval(getCountdown, 1000);
getCountdown();
