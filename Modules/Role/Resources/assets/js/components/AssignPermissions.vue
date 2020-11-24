<template>
  <div class="container">
    <div class="card bg-light mb-3">
      <div class="card-body">
        <div class="card-text">
          <div class="col-sm-12">
            <div v-if="errors.length" class="alert alert-warning" role="alert">
              <ul>
                <li v-for="(error, index) in errors" :key="index">
                  {{ error }}
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12">
            <div v-if="success_message" class="alert alert-info" role="alert">
              <b>{{ success_message }}</b>
            </div>
          </div>
          <form>
            <div class="col-sm-12">
              <div class="col-sm-4">
                <div class="form-group">
                  <select
                    class="form-control"
                    name="call_type"
                    id="call_type"
                    v-model="form.role"
                    @change="getPermissions()"
                  >
                    <option selected="true" disabled="disabled" value="">
                      Select Role
                    </option>

                    <option
                      v-for="single in roles"
                      v-bind:value="single.id"
                      v-bind:key="single.id"
                    >
                      {{ single.name }}
                    </option>
                  </select>
                </div>
              </div>
            </div>
          </form>

          <div class="col-sm-12">
            <ul class="list-unstyled">
              <li v-for="(submenu, index) in permissions" :key="index">
                <div class="col-sm-6">
                  <h3>{{ index }}</h3>
                  <ul class="list-unstyled">
                    <li v-for="(permission, sub) in submenu" :key="sub">
                      <h5>{{ sub }}</h5>
                      <ul class="list-unstyled">
                        <li v-for="(perm, i) in permission" :key="i">
                          <div class="form-group row">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-10 col-sm-offset-2">
                              <label class="container_check"
                                >{{ titleCase(perm.name) }}
                                <input
                                  type="checkbox"
                                  :value="perm.id"
                                  v-model="form.selected_permissions"
                                />
                                <span class="checkmark"></span>
                              </label>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>

          <div class="col-sm-12">
            <div class="col-sm-12">
              <div class="form-group">
                <button
                  type="button"
                  class="btn btn-info pull-right"
                  @click="submitData"
                >
                  Submit
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
import ValidatorMixin from "../mixins/Validator.vue";
import UtilitiesMixin from "../mixins/Utilities.vue";

export default {
  mixins: [ValidatorMixin, UtilitiesMixin],
  data() {
    return {
      errors: [],
      test_value: 10,
      success_message: null,
      roles: "",
      permissions: null,
      selected_menu: [],
      form: {
        role: "",
        selected_permissions: [],
      },
    };
  },
  // watch: {
  //   selected_menu: "updateMenuPermissions",
  // },
  created() {
    this.getRoles();
    this.getAllPermissions();
  },
  methods: {
    // updateMenuPermissions() {
    //   console.log(this.selected_menu);
    //   axios
    //     .get("/api/v1/get-menu-permissions", {
    //       params: {
    //         menus: this.selected_menu,
    //       },
    //     })
    //     .then((response) => {
    //       this.form.selected_permissions = response.data.permissions;
    //     })
    //     .catch((err) =>
    //       this.errors.push(
    //         "Unable to load menu permissions. Please refresh the page"
    //       )
    //     );
    // },
    getAllPermissions() {
      axios
        .get("/api/v1/get-all-permissions")
        .then((response) => {
          this.permissions = response.data.all_permissions;
        })
        .catch((err) =>
          this.errors.push(
            "Unable to load permissions. Please refresh the page"
          )
        );
    },
    getPermissions() {
      this.errors = [];
      this.success_message = null;
      axios
        .get("/api/v1/get-permissions", {
          params: {
            role: this.form.role,
          },
        })
        .then((response) => {
          this.form.selected_permissions = response.data.permissions;
        })
        .catch((err) =>
          this.errors.push(
            "Unable to load permissions. Please refresh the page"
          )
        );
    },
    getRoles() {
      axios
        .get("/api/v1/get-roles")
        .then((response) => {
          this.roles = response.data.roles;
        })
        .catch((err) =>
          this.errors.push("Unable to load roles. Please refresh the page")
        );
    },
    submitData() {
      // this.checkForm();

      if (this.errors.length > 0) {
        return;
      }
      let uri = "/api/v1/save-permissions";
      let submit_method = "POST";

      let submit_data = this.form;
      axios({ method: submit_method, url: uri, data: submit_data })
        .then((response) => {
          if (response.data.success == true) {
            this.success_message = response.data.message;
            // window.location = '/permissions';
          }
        })
        .catch(function (error) {
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

<style>
</style>