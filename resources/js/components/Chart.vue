<script>
import { Bar } from 'vue-chartjs';

export default {
   extends: Bar,
   mounted() {
         let Years = new Array();
         let Labels = new Array();
         let Prices = new Array();
         axios.get('api/coin').then((response) => {
            let data = response.data;
            if(data) {
               data.forEach(element => {
               Years.push(element.year);
               Labels.push(element.name);
               Prices.push(element.price);
               });
               this.renderChart({
               labels: Years,
               datasets: [{
                  label: 'Bitcoin',
                  // backgroundColor: '#FC2525',
                  data: Prices,
                  backgroundColor: [
                '#FC2525',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
              borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
             borderWidth: 1
            }]
         }, {responsive: true, maintainAspectRatio: false})
       }
       else {
          console.log('No data');
       }
      });
   }
}
</script>
