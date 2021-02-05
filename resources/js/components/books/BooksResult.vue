<template>
  <div>
    <div class="x_panel">
      <div class="x_title">
        <h2>Selected Books</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table class="table">
          <thead>
            <tr>
              <th>Book Title</th>
              <th>Book Author</th>
              <th>ISBN</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="book in books" :key="book.id">
              <th>{{ book.title }}</th>
              <td>{{ book.author }}</td>
              <td>{{ book.isbn }}</td>
              <td>
                <button
                  class="btn btn-sm green"
                  @click="$emit('select-book', book)"
                >
                  <i class="fa fa-plus"></i>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["books"],
  emits: ["select-book"],
};
</script>

<style  scoped>
  .table th {
    border-top: 0px;
  }
</style>