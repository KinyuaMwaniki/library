<template>
  <div>
    <div class="form-group col-sm-12">
      <label>Search title, isbn, or author</label>
      <input type="text" class="form-control" v-model="search_item" />
    </div>
    <div class="form-group col-sm-12" v-if="searched_books.length > 0">
      <books-result :books="searched_books" @select-book="selectBook"></books-result>
    </div>
    <div class="form-group col-sm-12" v-if="selected_books.length > 0">
      <books-selected :books="selected_books" @remove-book="removeBook"></books-selected>
    </div>
  </div>
</template>

<script>
export default {
  props: ["all_books"],
  data() {
    return {
      search_item: "",
      searched_books: [],
      selected_books: []
    };
  },
  watch: {
    search_item() {
      this.searchBooks();
    },
  },
  methods: {
    searchBooks() {
      this.searched_books = [];
      if (this.search_item.length < 2) {
        return [];
      }

      for (let i = 0; i < this.all_books.length; i++) {
        if (
          this.all_books[i].title
            .toUpperCase()
            .indexOf(this.search_item.toUpperCase()) !== -1 ||
          this.all_books[i].isbn
            .toUpperCase()
            .indexOf(this.search_item.toUpperCase()) !== -1 ||
          this.all_books[i].author
            .toUpperCase()
            .indexOf(this.search_item.toUpperCase()) !== -1
        ) {
          this.searched_books.push(this.all_books[i]);
        }
      }
    },
    selectBook(book) {
      this.selected_books.push(book);
      this.search_item = "";
    },
    removeBook(book) {
      this.selected_books = this.selected_books.filter((selected) => selected.id != book.id);
    }
  },
};
</script>