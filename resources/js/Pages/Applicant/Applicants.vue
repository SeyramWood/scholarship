<template>
  <v-data-table
    :headers="headers"
    :items="isFiltered ? getFilteredApplicants : getApplicants"
    :sort-by="['desired_major']"
    :sort-desc="[false, true]"
    :loading="loading"
    loading-text="Loading... Please wait"
    :items-per-page="100"
    :search="search"
    class="elevation-1"
  >
    <template v-slot:top>
      <v-toolbar flat>
        <v-toolbar-title>All Applicants</v-toolbar-title>
        <v-divider class="mx-4" inset vertical></v-divider>
        <v-spacer></v-spacer>
        <v-text-field
          v-model="search"
          append-icon="mdi-magnify"
          label="Search"
          single-line
          hide-details
        ></v-text-field>
        <v-spacer></v-spacer>
        <form
          class="d-flex"
          style="width: 400px"
          @submit.prevent="fetchApplicants()"
        >
          <v-select
            :items="[
              'Any',
              'In-Progress',
              'Completed',
              'Scholarship',
              'Reviewed',
            ]"
            label="Filter applicants"
            single-line
            hide-details
            multiple
            chips
            hint="Filter applicants"
            persistent-hint
            v-model="filterValue"
          ></v-select>
          <v-btn type="submit" color="primary" class="ml-1">
            <v-icon>mdi-filter-outline</v-icon>
            <span>Filter</span>
          </v-btn>
        </form>
        <v-spacer></v-spacer>
        <download-excel
          class="btn btn-default"
          :data="json_data"
          :fields="json_fields"
          worksheet="Application"
          name="application.xls"
        >
          <v-btn color="info" class="mb-2">
            <v-icon>mdi-cloud-download-outline</v-icon><span>Excel</span>
          </v-btn>
        </download-excel>
        <download-excel
          class="btn btn-default ml-1"
          :data="json_data"
          :fields="json_fields"
          worksheet="Application"
          type="csv"
          name="application.xls"
        >
          <v-btn color="info" class="mb-2">
            <v-icon>mdi-cloud-download-outline</v-icon><span>CSV</span>
          </v-btn>
        </download-excel>
      </v-toolbar>
    </template>
    <template v-slot:no-data>
      <v-icon small class="mr-2"> mdi-database-outline </v-icon>
      <span>Ooops! No applicant found</span>
    </template>
  </v-data-table>
</template>

<script>
import Layout from "../../components/Layout";
export default {
  name: "Applicants",
  layout: Layout,
  props: {
    applicants: {
      require: true,
      type: Array,
    },
  },
  computed: {
    getApplicants() {
      this.loading = true;
      setTimeout(() => {
        this.loading = false;
      }, 1000);
      return this.applicants.map((a) => {
        return {
          ...a,
          name: `${a.last_name} ${a.first_name}`,
        };
      });
    },
    getFilteredApplicants() {
      return this.filteredApplicants.map((a) => {
        return {
          ...a,
          name: `${a.last_name} ${a.first_name}`,
        };
      });
    },
  },
  mounted() {
    this.json_data = this.getApplicants;
  },
  data: () => ({
    search: "",
    dialog: false,
    dialogDelete: false,
    headers: [
      {
        text: "Full Name",
        align: "start",
        value: "name",
      },
      { text: "Email", value: "email" },
      { text: "Phone", value: "contact_number" },
      { text: "Desired Major", value: "desired_major" },
    ],
    loading: false,
    filteredApplicants: [],
    filterValue: [],
    isFiltered: false,

    json_fields: {
      name: "name",
      email: "email",
      phone: "contact_number",
      "Desired Major": "desired_major",
    },
    json_data: [],
    json_meta: [
      [
        {
          key: "charset",
          value: "utf-8",
        },
      ],
    ],

    desserts: [],
    editedIndex: -1,
    editedItem: {
      name: "",
      calories: 0,
      fat: 0,
      carbs: 0,
      protein: 0,
    },
    defaultItem: {
      name: "",
      calories: 0,
      fat: 0,
      carbs: 0,
      protein: 0,
    },
  }),

  watch: {
    dialog(val) {
      val || this.close();
    },
    dialogDelete(val) {
      val || this.closeDelete();
    },
  },

  created() {},

  methods: {
    async fetchApplicants() {
      this.isFiltered = true;
      this.loading = true;
      if (this.filterValue.includes("Any")) {
        this.loading = false;
        this.isFiltered = false;
        this.json_data = this.getApplicants;
        return;
      }
      try {
        const { data } = await this.$axios.get(
          `/dashboard/filter-applicants/${this.filterValue}`
        );
        this.loading = false;
        this.filteredApplicants = data;
        this.json_data = this.getFilteredApplicants;
      } catch (error) {
        console.trace(error);
      }
    },

    editItem(item) {
      this.editedIndex = this.desserts.indexOf(item);
      this.editedItem = Object.assign({}, item);
      this.dialog = true;
    },

    deleteItem(item) {
      this.editedIndex = this.desserts.indexOf(item);
      this.editedItem = Object.assign({}, item);
      this.dialogDelete = true;
    },

    deleteItemConfirm() {
      this.desserts.splice(this.editedIndex, 1);
      this.closeDelete();
    },

    close() {
      this.dialog = false;
      this.$nextTick(() => {
        this.editedItem = Object.assign({}, this.defaultItem);
        this.editedIndex = -1;
      });
    },

    closeDelete() {
      this.dialogDelete = false;
      this.$nextTick(() => {
        this.editedItem = Object.assign({}, this.defaultItem);
        this.editedIndex = -1;
      });
    },

    save() {
      if (this.editedIndex > -1) {
        Object.assign(this.desserts[this.editedIndex], this.editedItem);
      } else {
        this.desserts.push(this.editedItem);
      }
      this.close();
    },
  },
};
</script>

<style lang="scss" scoped>
</style>