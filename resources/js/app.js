document.addEventListener("DOMContentLoaded", function () {
    // Function to handle event enrollment
    function enrollInEvent(eventId) {
        // Perform an AJAX request to enroll in the event
        // You would typically send the enrollment request to the server here

        // For this example, let's just log the enrollment
        console.log(`Enrolled in Event ${eventId}`);
    }

    // Attach click event listeners to all "Enroll" buttons
    const enrollButtons = document.querySelectorAll(".enroll-button");
    enrollButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const eventId = this.dataset.eventId;
            enrollInEvent(eventId);
        });
    });
});
