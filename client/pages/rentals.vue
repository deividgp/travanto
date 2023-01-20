<template>
  <div>
    <v-date-picker v-model="from"></v-date-picker>
    <v-date-picker v-model="until"></v-date-picker>
    <p>From: {{ from }}</p>
    <p>Until: {{ until }}</p>
    <v-data-table :headers="headers" :items="rentals" item-key="id">
      <template v-slot:item.actions="{ item }">
        <v-btn small @click="bookRental(item)"> BOOK </v-btn>
      </template>
    </v-data-table>
  </div>
</template>

<script>
import axios from "axios";
export default {
  name: 'RentalsPage',
  data() {
    return {
      from: '2023-01-20',
      until: '2023-01-20',
      rentals: [
        {
          id: 0,
          name: '',
          location: '',
          rooms: 0,
        },
      ],
    }
  },
  head() {
    return {
      title: 'Rentals',
    }
  },
  computed: {
    headers() {
      return [
        { text: 'ID', value: 'id' },
        { text: 'Name', value: 'name' },
        { text: 'Location', value: 'location' },
        { text: 'Rooms', value: 'rooms' },
        { text: 'Actions', value: 'actions', sortable: false },
      ]
    },
  },
  created() {
    axios.get('http://localhost:8000/api/rentals')
      .then((result) => {
        this.rentals = result.data;
      })
  },
  methods: {
    bookRental(item) {
      console.log(item);
    },
  },
}
</script>

<style>
.v-picker__title,
.v-date-picker-table .v-btn.v-btn--active {
  color: inherit !important;
}
</style>
