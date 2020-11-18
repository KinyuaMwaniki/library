<script>
export default {
  methods: {
    checkForm: function (e) {
      this.errors = [];
      if (this.form.selected_permissions.length == 0) {
        this.errors.push("No permission selected");
      }
    },
  },
};
</script>
