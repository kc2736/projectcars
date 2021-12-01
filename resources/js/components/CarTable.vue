<template>
    <v-data-table
        :headers="headers"
        :items="carsList"
        :items-per-page="5"
        class="elevation-1"
    ></v-data-table>
</template>

<script>
export default {
    name: "CarTable",
    data (){
        return{
            headers: [
                {
                    text: 'Cars',
                    align: 'start',
                    sortable: false,
                    value: 'name',
                },
                { text: 'Type', value: 'type' },
                { text: 'Brand', value: 'brand' },
                { text: 'Model', value: 'model' },
                { text: 'Year', value: 'year' },
                { text: 'Doors', value: 'doors' },
            ],
            carsList:[
                {
                    name: 'Uno',
                    type: 'Hatchback',
                    brand: 159,
                    model: 6.0,
                    year: 24,
                    doors: 4.0,
                }
            ]
        }
    }
}
</script>

<style scoped>

</style>
