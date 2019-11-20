<template>
    <div>
        <h1 class="font-normal text-3xl text-heading leading-none">
            Laracasts Stats
        </h1>

        <ul>
            <li><strong>Series: </strong> {{ series }}</li>
            <li><strong>Lessons: </strong> {{ lessons }}</li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                series: 0,
                lessons: 0,
            }
        },
        created() {
            axios.get('http://testapp.test/api/stats').then(({data}) => {
                this.series = data.series;
                this.lessons = data.lessons;
            });
        }
    }
</script>
