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
                  <label for="call_type">
                    Role
                    <span class="required-marker">*&nbsp;</span>
                  </label>
                  <select
                    class="form-control"
                    name="call_type"
                    id="call_type"
                    v-model="form.role"
                    @change="getPermissions"
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
            <ul>
              <li v-for="(submenu, index) in permissions" :key="index">
                {{ index }}
                <ul>
                  <li v-for="(permission, sub) in submenu" :key="sub">
                    {{ sub }}
                    <ul>
                      <li v-for="(perm, i) in permission" :key="i">
                        {{ perm }}
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      errors: [],
      success_message: null,
      roles: "",
      permissions: "",
      form: {
        role: "",
      },
    };
  },
  created() {
    this.getRoles();
    this.getAllPermissions();
  },
  methods: {
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
      axios
        .get("/api/v1/get-permissions", {
          params: {
            role_id: this.form.role,
          },
        })
        .then((response) => {
          // this.roles = response.data.roles;
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
  },
};
</script>

<style>
</style>