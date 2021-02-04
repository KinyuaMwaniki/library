<template>
  <div>
    <div class="x_panel">
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
              <td>{{ book.title }}</td>
              <td>{{ book.author }}</td>
              <td>{{ book.isbn }}</td>
              <td>
                <button
                  class="btn btn-sm red"
                  @click="$emit('remove-book', book)"
                >
                  <i class="fa fa-minus"></i>
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
  emits: ["remove-book"],
};
</script>

<style  scoped>
  .table th {
    border-top: 0px;
  }
</style>