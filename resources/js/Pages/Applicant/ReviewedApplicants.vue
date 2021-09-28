<template>
  <v-data-table
    :headers="headers"
    :items="getApplicants"
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
        <v-toolbar-title>Reviewed Applicants</v-toolbar-title>
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
  name: "ReviewedApplicants",
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
  },
  mounted() {
    this.json_data = this.getApplicants;
  },
  data: () => ({
    dialog: false,
    dialogDelete: false,
    search: "",
    headers: [
      {
        text: "Full Name",
        align: "start",
        value: "name",
      },
      { text: "Email", value: "email" },
      { text: "Phone", value: "contact_number" },
      { text: "Desired Major", value: "desired_major" },
      { text: "Reviewer", value: "reviewer_name" },
    ],
    loading: false,
    filteredApplicants: [],
    filterValue: [],
    isFiltered: false,

    json_fields: {
      "Authentication Code": "authentication_code",
      Surname: "last_name",
      "First Name": "first_name",
      "Date of birth": "date_of_birth",
      Telephone: "contact_number",
      Gender: "gender",
      "Desired Major": "desired_major",
      Email: "email",
      Nationality: "citizenship",
      "Town/City": "city",
      "Name parent 1": "guardian_one_name",
      "Email parent 1": "guardian_one_email",
      "Phone parent 1": "guardian_one_phone_number",
      "Name parent 2": "guardian_two_name",
      "Email parent 2": "guardian_two_email",
      "Phone parent 2": "guardian_two_phone_number",
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
  }),

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
  },
};
</script>

<style lang="scss" scoped>
</style>