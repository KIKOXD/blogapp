// dashboard.js

// Example chart for "Exchange Rates"
const ctx1 = document.getElementById('exchangeRates').getContext('2d');
new Chart(ctx1, {
    type: 'line',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr'],
        datasets: [{
            label: 'USD to IDR',
            data: [15000, 15500, 15800, 16000],
            borderColor: 'blue',
            tension: 0.3
        }]
    }
});

// Example chart for "Last Costs"
const ctx2 = document.getElementById('lastCosts').getContext('2d');
new Chart(ctx2, {
    type: 'bar',
    data: {
        labels: ['Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
            label: 'Spending',
            data: [2000, 1500, 1000, 1200],
            backgroundColor: 'purple'
        }]
    }
});
