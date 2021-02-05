<template>
  <div>
    <div class="x_panel">
      <div class="x_title">
        <h2>Issue to</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <div class="col-sm-9">
          <p> 
              {{ student.full_name }}
              <span v-if="student.unreturned_books >= max_issues" class="red">: Student has {{ student.unreturned_books }} unreturned books</span>
          </p>
          <p>{{ student.student_number }}</p>
        </div>
        <div class="col-sm-3">
          <button
            class="btn btn-sm btn-info pull-right"
            @click="$emit('remove-student', student)"
          >
            Change Student
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["student", "max_issues"],
  emits: ["remove-student"],
};
</script>

<style  scoped>
  .table th {
    border-top: 0px;
  }
</style>