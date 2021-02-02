<template>
  <div>
    <div class="form-group col-sm-12">
      <label>Search title, isbn, or author</label>
      <input type="text" class="form-control" v-model="book" />
    </div>
    <div class="form-group col-sm-12" v-if="searched_books.length > 0">
      <books-result
        :books="searched_books"
        @select-book="selectBook"
      ></books-result>
    </div>
    <div class="form-group col-sm-12" v-if="selected_books.length > 0">
      <books-selected
        :books="selected_books"
        @remove-book="removeBook"
      ></books-selected>
    </div>
    <div class="form-group col-sm-12" v-if="selected_student.length === 0">
      <label>Search name or student number</label>
      <input type="text" class="form-control" v-model="student" />
    </div>
    <div class="form-group col-sm-12" v-if="searched_students.length > 0 ">
      <students-result
        :students="searched_students"
        @select-student="selectStudent"
      ></students-result>
    </div>
    <div class="form-group col-sm-12" v-if="selected_student.length !== 0">
      <students-selected
        :student="selected_student"
        @remove-student="removeStudent"
      ></students-selected>
    </div>
    <div class="form-group col-sm-12" v-if="selected_student.length !== 0 && selected_books.length > 0">
      <button class="btn btn-success">Issue</button>
    </div>
  </div>
</template>

<script>
export default {
  props: ["all_books", "all_students"],
  data() {
    return {
      book: "",
      searched_books: [],
      selected_books: [],
      student: "",
      searched_students: [],
      selected_student: "",
    };
  },
  watch: {
    book() {
      this.searchBooks();
    },
    student() {
      this.searchStudents();
    },
  },
  methods: {
    searchBooks() {
      this.searched_books = [];
      if (this.book.length < 2) {
        return [];
      }

      for (let i = 0; i < this.all_books.length; i++) {
        if (
          this.all_books[i].title
            .toUpperCase()
            .indexOf(this.book.toUpperCase()) !== -1 ||
          this.all_books[i].isbn
            .toUpperCase()
            .indexOf(this.book.toUpperCase()) !== -1 ||
          this.all_books[i].author
            .toUpperCase()
            .indexOf(this.book.toUpperCase()) !== -1
        ) {
          this.searched_books.push(this.all_books[i]);
        }
      }
    },
    selectBook(book) {
      this.selected_books.push(book);
      this.book = "";
    },
    removeBook(book) {
      this.selected_books = this.selected_books.filter(
        (selected) => selected.id != book.id
      );
    },

    searchStudents() {
      this.seached_students = [];
      if (this.student.length < 2) {
        return [];
      }

      for (let i = 0; i < this.all_students.length; i++) {
        if (
          this.all_students[i].student_number
            .toUpperCase()
            .indexOf(this.student.toUpperCase()) !== -1 ||
          this.all_students[i].first_name
            .toUpperCase()
            .indexOf(this.student.toUpperCase()) !== -1 ||
          this.all_students[i].middle_name
            .toUpperCase()
            .indexOf(this.student.toUpperCase()) !== -1 ||
          this.all_students[i].last_name
            .toUpperCase()
            .indexOf(this.student.toUpperCase()) !== -1
        ) {
          this.searched_students.push(this.all_students[i]);
        }
      }
    },
    selectStudent(student) {
      this.selected_student = student;
      this.student = "";
      this.searched_students = [];
    },
    removeStudent(student) {
      this.selected_student = "";
    },
  },
};
</script>