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
    <div
      class="form-group col-sm-12"
      v-if="selected_student.length === 0 && selected_books.length > 0"
    >
      <label>Search name or student number</label>
      <input type="text" class="form-control" v-model="student" />
    </div>
    <div class="form-group col-sm-12" v-if="searched_students.length > 0">
      <students-result
        :students="searched_students"
        @select-student="selectStudent"
      ></students-result>
    </div>
    <div class="form-group col-sm-12" v-if="selected_student.length !== 0">
      <students-selected
        :student="selected_student"
        :max_issues="maximum_issues_per_student"
        @remove-student="removeStudent"
      ></students-selected>
    </div>
    <div class="form-group col-sm-12" v-if="selected_student.length !== 0">
      <label>Return Date</label>
      <input type="date" class="form-control" v-model="date_expected" />
    </div>
    <div
      class="form-group col-sm-12"
      v-if="selected_student.length !== 0 && selected_books.length > 0"
    >
      <button class="btn btn-success" @click="issue">Issue</button>
    </div>
  </div>
</template>

<script>
export default {
  props: ["all_books", "all_students", "all_settings"],
  data() {
    return {
      book: "",
      searched_books: [],
      selected_books: [],
      student: "",
      searched_students: [],
      selected_student: "",
      date_expected: null,
      maximum_issues_per_student: 0,
      print_issue_card: false,
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
  mounted() {
    this.initializeSettings();
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
    removeStudent() {
      this.selected_student = "";
    },
    issue() {
      let form = {};
      form.books = this.selected_books;
      form.student = this.selected_student;
      form.date_expected = this.date_expected;

      let submit_method = "POST";
      let uri = "/api/v1/issuances";
      let submit_data = form;

      let that = this;

      axios({ method: submit_method, url: uri, data: submit_data })
        .then((response) => {
          if (response.data.success == true) {
            this.selected_student = "";
            this.selected_books = [];
            this.$toaster.success("Issuance Saved.", { timeout: 5000 });
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
    initializeSettings() {
      for (let i = 0; i < this.all_settings.length; i++) {
        if (this.all_settings[i].policy === "DEFAULT ISSUE DAYS") {
          this.date_expected = this.all_settings[i].date_expected;
        } else if (
          this.all_settings[i].policy === "MAXIMUM ISSUES PER STUDENT"
        ) {
          this.maximum_issues_per_student = this.all_settings[i].value;
        } else if (this.all_settings[i].policy === "PRINT ISSUE CARD") {
          this.print_issue_card = this.all_settings[i].value;
        }
      }
    },
  },
};
</script>