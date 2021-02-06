<template>
  <div>
    <div class="row">
      <div class="form-group col-sm-6">
        <h2>
          <label>Popular Books</label>
        </h2>
        <select class="form-control" v-model="period" name="" id="">
          <option value="month">Past Month</option>
          <option value="3months">Past 3 Month</option>
          <option value="6months">Past 6 Month</option>
          <option value="year">Past Year</option>
          <option value="all">All Time</option>
        </select>
      </div>
    </div>
    <table class="display" style="width: 100%">
      <thead>
        <tr>
          <th>Title</th>
          <th>Author</th>
          <th>ISBN</th>
          <th>Borrowed</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="book in books" :key="book.id">
          <td>
            {{ book.title }}
          </td>
          <td>{{ book.author }}</td>
          <td>{{ book.isbn }}</td>
          <td>{{ book.issuances_count }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      books: [],
      period: "all",
    };
  },
  watch: {
    period() {
      this.getBooks();
    },
  },
  mounted() {
    this.getBooks();
  },
  methods: {
    getBooks() {
      this.books = [];

      let that = this;
      let form = {};
      form.period = this.period;
      let submit_data = form;

      axios({ method: "POST", url: "/api/v1/books", data: submit_data })
        .then((response) => {
          if (response.data.success == true) {
            this.books = response.data.books;
          }
        })
        .catch(function (error) {
          that.$toaster.error("Error, Please try again.", { timeout: 5000 });
          if (error.response) {
            console.log(error.response.data);
            console.log(error.response.status);
            console.log(error.response.headers);
          } else if (error.request) {
            console.log(error.request);
          } else {
            console.log("Error", error.message);
          }
          console.log(error.config);
        });
    },
  },
};
</script>