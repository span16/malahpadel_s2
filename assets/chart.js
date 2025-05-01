import { Chart } from 'chart.js/auto';

document.addEventListener('DOMContentLoaded', () => {
    const chartElements = document.querySelectorAll('[data-chart]');
    
    chartElements.forEach(element => {
        const chartData = JSON.parse(element.dataset.chart);
        new Chart(element, chartData);
    });
});