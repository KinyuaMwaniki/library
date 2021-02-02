<template>
  <div>
    <div class="x_panel">
      <div class="x_title">
        <h2>Selected Students</h2>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Student Number</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="student in students" :key="student.id">
              <th>{{ student.full_name }}</th>
              <td>{{ student.student_number }}</td>
              <td>
                <button
                  class="btn btn-sm green"
                  @click="$emit('select-student', student)"
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
  props: ["students"],
  emits: ["select-student"],
};
</script>

<style  scoped>
  .table th {
    border-top: 0px;
  }
</style>