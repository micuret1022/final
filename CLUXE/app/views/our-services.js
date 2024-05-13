document.addEventListener("DOMContentLoaded", function() {
    //hours buttons
    const numOfHoursMinusBtn = document.getElementById("num-of-hours1");
    const numOfHoursPlusBtn = document.getElementById("num-of-hours2");
    const numOfHoursInput = document.querySelector("#priceQuote input[type='text'][placeholder='0']");

    numOfHoursMinusBtn.addEventListener("click", function() {
        let currentValue = parseInt(numOfHoursInput.value);
        if (!isNaN(currentValue) && currentValue > 0) {
            numOfHoursInput.value = currentValue - 1;
        }
    });

    numOfHoursPlusBtn.addEventListener("click", function() {
        let currentValue = parseInt(numOfHoursInput.value);
        if (!isNaN(currentValue)) {
            numOfHoursInput.value = currentValue + 1;
        } else {
            numOfHoursInput.value = 1; // If the input is empty, set it to 1
        }
    });


    //minutes buttons
    const numOfMinutesMinusBtn = document.getElementById("num-of-minutes1");
    const numOfMinutesPlusBtn = document.getElementById("num-of-minutes2");
    const numOfMinutesInput = document.querySelector("#priceQuote input[name='minutes']");

    numOfMinutesMinusBtn.addEventListener("click", function() {
        let currentValue = parseInt(numOfMinutesInput.value);
        if (!isNaN(currentValue) && currentValue > 0) {
            numOfMinutesInput.value = currentValue - 1;
        }
    });

    numOfMinutesPlusBtn.addEventListener("click", function() {
        let currentValue = parseInt(numOfMinutesInput.value);
        if (!isNaN(currentValue)) {
            numOfMinutesInput.value = currentValue + 1;
        } else {
            numOfMinutesInput.value = 1; // If the input is empty, set it to 1
        }
    });


    //travellers buttons
    const numOfTravellersMinusBtn = document.getElementById("traveller-button1");
    const numOfTravellersPlusBtn = document.getElementById("traveller-button2");
    const numOfTravellersInput = document.querySelector("#priceQuote input[name='travellers-input']");

    numOfTravellersMinusBtn.addEventListener("click", function() {
        let currentValue = parseInt(numOfTravellersInput.value);
        if (!isNaN(currentValue) && currentValue > 0) {
            numOfTravellersInput.value = currentValue - 1;
        }
    });

    numOfTravellersPlusBtn.addEventListener("click", function() {
        let currentValue = parseInt(numOfTravellersInput.value);
        if (!isNaN(currentValue)) {
            numOfTravellersInput.value = currentValue + 1;
        } else {
            numOfTravellersInput.value = 1; // If the input is empty, set it to 1
        }
    });

    //children buttons
    const numOfChildrenMinusBtn = document.getElementById("children-button1");
    const numOfChildrenPlusBtn = document.getElementById("children-button2");
    const numOfChildrenInput = document.querySelector("#priceQuote input[name='children-input']");

    numOfChildrenMinusBtn.addEventListener("click", function() {
        let currentValue = parseInt(numOfChildrenInput.value);
        if (!isNaN(currentValue) && currentValue > 0) {
            numOfChildrenInput.value = currentValue - 1;
        }
    });

    numOfChildrenPlusBtn.addEventListener("click", function() {
        let currentValue = parseInt(numOfChildrenInput.value);
        if (!isNaN(currentValue)) {
            numOfChildrenInput.value = currentValue + 1;
        } else {
            numOfChildrenInput.value = 1; // If the input is empty, set it to 1
        }
    });



    //bags buttons
    const numOfBagsMinusBtn = document.getElementById("bags-button1");
    const numOfBagsPlusBtn = document.getElementById("bags-button2");
    const numOfBagsInput = document.querySelector("#priceQuote input[name='bags-input']");

    numOfBagsMinusBtn.addEventListener("click", function() {
        let currentValue = parseInt(numOfBagsInput.value);
        if (!isNaN(currentValue) && currentValue > 0) {
            numOfBagsInput.value = currentValue - 1;
        }
    });

    numOfBagsPlusBtn.addEventListener("click", function() {
        let currentValue = parseInt(numOfBagsInput.value);
        if (!isNaN(currentValue)) {
            numOfBagsInput.value = currentValue + 1;
        } else {
            numOfBagsInput.value = 1; // If the input is empty, set it to 1
        }
    });

});