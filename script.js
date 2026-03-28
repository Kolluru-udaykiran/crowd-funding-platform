let enteredAmount = 0;
let totalRaised = 0;
let goalAmount = 10000;

function donate() {
    let amount = document.getElementById("amount").value;

    if (amount <= 0) {
        alert("Enter valid amount");
        return;
    }

    enteredAmount = parseInt(amount);

    // Show popup
    document.getElementById("paymentBox").style.display = "block";
}

function confirmPayment() {
    document.getElementById("paymentBox").style.display = "none";

    totalRaised += enteredAmount;

    // Update UI
    document.getElementById("fund-text").innerText =
        `₹${totalRaised} raised of ₹${goalAmount}`;

    let percent = (totalRaised / goalAmount) * 100;

// Limit to max 100%
if (percent > 100) {
    percent = 100;
}
    document.getElementById("progress-bar").style.width = percent + "%";

    // Send to backend
    fetch("donate.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `amount=${enteredAmount}&project_id=1`
    });

    // Clear input
    document.getElementById("amount").value = "";

    alert("Payment noted! Thank you.");
}