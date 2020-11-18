<script>
export default {
  methods: {
    titleCase: function (string) {
      let sentence = string.toLowerCase().split("_");
      let firstcharacter = 1;
      for (let i = 0; i < sentence.length; i++) {
        if (firstcharacter == 1) {
          sentence[i] = sentence[i][0].toUpperCase() + sentence[i].slice(1);
          firstcharacter = 0;
        } else {
          sentence[i] = sentence[i][0] + sentence[i].slice(1);
        }
      }
      return sentence.join(" ");
    },
    // updateMenuPermissions: function (item) {
    //     console.log(this.permissions[item]);
    //   this.getSubMenuPermissions();
    //         sum += item;
    //   document.getElementById("demo").innerHTML = sum;
    // },

    // getSubMenuPermissions() {
    //   let array = this.permissions["Inventory Menu"];

    //   for (const property in array) {
    //       for(const property1 in array[property]) {
    //           console.log(`${property1}: ${array[property][property1]}`);
    //       }
    //   }
    // },
  },
};
</script>


