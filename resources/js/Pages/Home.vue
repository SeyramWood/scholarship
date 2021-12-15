<template>
  <v-app>
    <v-main class="home">
      <header class="home__banner">
        <nav class="home__nav">
          <div class="home__nav__brand">
            <img src="/storage/logo-2.png" alt="" srcset="" />
          </div>
          <ul class="home__nav__links">
            <li><a href="#">About</a></li>
            <li><a href="#">Apply</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </nav>
        <section class="home__banner__cta">
          <article>
            <h3>Mastercard Foundation</h3>
            <h1>Scholars Program</h1>
            <h1>a A.D.U.!</h1>
          </article>
        </section>
        <section class="home__banner__icon">
          <a href="">
            <v-icon>mdi-arrow-down-bold</v-icon>
          </a>
        </section>
      </header>
      <section class="home__about">
        <div class="home__about__title">
          <h1>About</h1>
          <p>
            Les « Scholars Program Partners » de la Fondation Mastercard est une
            initiative mondiale visant à éduquer et à former la prochaine
            génération de leaders qui contribueront au progrès social et
            économique du continent Africain.
          </p>
        </div>
        <main class="home__about__description">
          <article class="article">
            <p>
              L’African development universalis (A.D.U.) et la Mastercard
              Foundation ont le plaisir de vous annoncer les bourses Mastercard
              Foundation Scholars Program à A.D.U. Ce programme offre une bourse
              d’études complète aux étudiants, cette bourse permet à des jeunes
              issus de communautés économiquement défavorisées, qui ont fait
              preuve de talent scolaire et de potentiel de leadership, d'accéder
              à une éducation de qualité et pertinente.
            </p>
            <p>
              Le Mastercard Foundation Scholars Program fournit un soutien
              financier, social et académique. L’aide financière inclut, les
              frais de scolarité, l’hébergement, les livres, matériels
              scolaires, le transport, allocations et dispose d’un réseau de
              soutien complet comprenant un éventail de services de mentorat et
              accompagne leur transition vers des opportunités d’emploi et
              entreprenariat.
            </p>
            <article>
              <p>
                Ce programme qui est pour la première fois au Niger, et en
                exclusivité avec A.D.U., n’est par ailleurs implémenté que dans
                de prestigieuses universités comme :
              </p>
              <ul>
                <li>Stanford, Berkeley et Wellesley aux Etats Unis</li>
                <li>Université de Toronto et McGill au Canada</li>
                <li>Sciences Po en France</li>
                <li>
                  Universite de Cape Town, Makerere, Ashesi et ALU en Afrique
                </li>
              </ul>
            </article>
            <h1 class="programs__title">Programs</h1>
            <ul>
              <li>Droit</li>
              <li>Comptabilité</li>
              <li>Intelligence Artificielle</li>
              <li>Management des projets</li>
              <li>Systèmes de gestion de l'information</li>
            </ul>
          </article>
          <div class="image">
            <img src="/storage/girl.png " alt="" srcset="" />
          </div>
        </main>
      </section>

      <section class="home__apply">
        <h1 class="home__apply__title">Apply</h1>
        <div class="home__apply__form__wrapper">
          <v-row justify="center">
            <v-col cols="12" sm="10" md="8" lg="6">
              <v-card ref="form">
                <v-card-text>
                  <v-row>
                    <v-col cols="6" sm="12" md="6" lg="6">
                      <v-text-field
                        ref="nom"
                        v-model="details.nom"
                        label="Nom"
                        placeholder="Nom"
                        required
                      ></v-text-field>
                    </v-col>
                    <v-col cols="6" sm="12" md="6" lg="6">
                      <v-text-field
                        ref="prénom"
                        v-model="details.prénom"
                        label="Prénom"
                        placeholder="Prénom"
                        counter="25"
                        required
                      ></v-text-field>
                    </v-col>
                  </v-row>

                  <v-row>
                    <v-col cols="12" sm="12">
                      <v-menu
                        ref="menu"
                        :close-on-content-click="false"
                        :return-value.sync="date"
                        transition="scale-transition"
                        offset-y
                        min-width="auto"
                      >
                        <template v-slot:activator="{ on, attrs }">
                          <v-text-field
                            label="Age"
                            prepend-icon="mdi-calendar"
                            readonly
                            v-bind="attrs"
                            v-on="on"
                            v-model="details.age"
                          ></v-text-field>
                        </template>
                        <v-date-picker v-model="date" no-title scrollable>
                          <v-spacer></v-spacer>
                          <v-btn text color="primary" @click="menu = false">
                            Cancel
                          </v-btn>
                          <v-btn
                            text
                            color="primary"
                            @click="$refs.menu.save(date)"
                          >
                            OK
                          </v-btn>
                        </v-date-picker>
                      </v-menu>
                    </v-col>
                  </v-row>

                  <v-row>
                    <v-col cols="6" sm="12" md="6" lg="6">
                      <v-text-field
                        ref="email"
                        v-model="details.email"
                        label="E-mail"
                        placeholder="E-mail"
                        required
                      ></v-text-field>
                    </v-col>
                    <v-col cols="6" sm="12" md="6" lg="6">
                      <v-row>
                        <v-col cols="4" sm="4">
                          <v-autocomplete
                            ref="country"
                            v-model="details.type"
                            :items="countries"
                            label="Code"
                            required
                          ></v-autocomplete>
                        </v-col>
                        <v-col cols="8" sm="8">
                          <v-text-field
                            ref="téléphone"
                            v-model="details.téléphone"
                            label="Numéro de téléphone"
                            placeholder="Numéro de téléphone"
                            counter="25"
                            required
                          >
                          </v-text-field>
                        </v-col>
                      </v-row>
                    </v-col>
                  </v-row>

                  <v-row>
                    <v-col cols="6" sm="12" md="6" lg="6">
                      <v-autocomplete
                        ref="country"
                        v-model="details.année"
                        :items="countries"
                        label="Année du BAC"
                        placeholder="Select..."
                        required
                      ></v-autocomplete>
                    </v-col>
                    <v-col cols="6" sm="12" md="6" lg="6">
                      <v-autocomplete
                        ref="country"
                        v-model="details.type"
                        :items="countries"
                        label="Type de BAC"
                        placeholder="Select..."
                        required
                      ></v-autocomplete>
                    </v-col>
                  </v-row>

                  <v-row>
                    <v-col cols="12" sm="12">
                      <p class="text-1">
                        Etes-vous actuellement inscrit dans une université ou
                        institut ?
                      </p>
                      <v-radio-group v-model="details.question" row>
                        <v-radio label="Yes" value="yes"></v-radio>
                        <v-radio label="No" value="no"></v-radio>
                      </v-radio-group>
                    </v-col>
                  </v-row>
                </v-card-text>
                <v-divider class="mt-12"></v-divider>
                <v-card-actions>
                  <v-spacer></v-spacer>
                  <!-- <v-slide-x-reverse-transition>
                    <v-tooltip v-if="formHasErrors" left>
                      <template v-slot:activator="{ on, attrs }">
                        <v-btn
                          icon
                          class="my-0"
                          v-bind="attrs"
                          @click="resetForm"
                          v-on="on"
                        >
                          <v-icon>mdi-refresh</v-icon>
                        </v-btn>
                      </template>
                      <span>Refresh form</span>
                    </v-tooltip>
                  </v-slide-x-reverse-transition> -->
                  <v-btn color="primary" @click="submit" x-large>
                    Submit
                  </v-btn>
                  <v-spacer></v-spacer>
                </v-card-actions>
              </v-card>
            </v-col>
          </v-row>
        </div>
      </section>
    </v-main>
  </v-app>
</template>

<script>
export default {
  name: "Home",
  beforeCreate() {
    this.$nextTick(() => {
      this.getCountries();
    });
  },
  data: () => ({
    countries: [
      "Afghanistan",
      "Albania",
      "Algeria",
      "Andorra",
      "Angola",
      "Anguilla",
      "Antigua &amp; Barbuda",
      "Argentina",
      "Armenia",
      "Aruba",
      "Australia",
      "Austria",
      "Azerbaijan",
      "Bahamas",
      "Bahrain",
      "Bangladesh",
      "Barbados",
      "Belarus",
      "Belgium",
      "Belize",
      "Benin",
      "Bermuda",
      "Bhutan",
      "Bolivia",
      "Bosnia &amp; Herzegovina",
      "Botswana",
      "Brazil",
      "British Virgin Islands",
      "Brunei",
      "Bulgaria",
      "Burkina Faso",
      "Burundi",
      "Cambodia",
      "Cameroon",
      "Cape Verde",
      "Cayman Islands",
      "Chad",
      "Chile",
      "China",
      "Colombia",
      "Congo",
      "Cook Islands",
      "Costa Rica",
      "Cote D Ivoire",
      "Croatia",
      "Cruise Ship",
      "Cuba",
      "Cyprus",
      "Czech Republic",
      "Denmark",
      "Djibouti",
      "Dominica",
      "Dominican Republic",
      "Ecuador",
      "Egypt",
      "El Salvador",
      "Equatorial Guinea",
      "Estonia",
      "Ethiopia",
      "Falkland Islands",
      "Faroe Islands",
      "Fiji",
      "Finland",
      "France",
      "French Polynesia",
      "French West Indies",
      "Gabon",
      "Gambia",
      "Georgia",
      "Germany",
      "Ghana",
      "Gibraltar",
      "Greece",
      "Greenland",
      "Grenada",
      "Guam",
      "Guatemala",
      "Guernsey",
      "Guinea",
      "Guinea Bissau",
      "Guyana",
      "Haiti",
      "Honduras",
      "Hong Kong",
      "Hungary",
      "Iceland",
      "India",
      "Indonesia",
      "Iran",
      "Iraq",
      "Ireland",
      "Isle of Man",
      "Israel",
      "Italy",
      "Jamaica",
      "Japan",
      "Jersey",
      "Jordan",
      "Kazakhstan",
      "Kenya",
      "Kuwait",
      "Kyrgyz Republic",
      "Laos",
      "Latvia",
      "Lebanon",
      "Lesotho",
      "Liberia",
      "Libya",
      "Liechtenstein",
      "Lithuania",
      "Luxembourg",
      "Macau",
      "Macedonia",
      "Madagascar",
      "Malawi",
      "Malaysia",
      "Maldives",
      "Mali",
      "Malta",
      "Mauritania",
      "Mauritius",
      "Mexico",
      "Moldova",
      "Monaco",
      "Mongolia",
      "Montenegro",
      "Montserrat",
      "Morocco",
      "Mozambique",
      "Namibia",
      "Nepal",
      "Netherlands",
      "Netherlands Antilles",
      "New Caledonia",
      "New Zealand",
      "Nicaragua",
      "Niger",
      "Nigeria",
      "Norway",
      "Oman",
      "Pakistan",
      "Palestine",
      "Panama",
      "Papua New Guinea",
      "Paraguay",
      "Peru",
      "Philippines",
      "Poland",
      "Portugal",
      "Puerto Rico",
      "Qatar",
      "Reunion",
      "Romania",
      "Russia",
      "Rwanda",
      "Saint Pierre &amp; Miquelon",
      "Samoa",
      "San Marino",
      "Satellite",
      "Saudi Arabia",
      "Senegal",
      "Serbia",
      "Seychelles",
      "Sierra Leone",
      "Singapore",
      "Slovakia",
      "Slovenia",
      "South Africa",
      "South Korea",
      "Spain",
      "Sri Lanka",
      "St Kitts &amp; Nevis",
      "St Lucia",
      "St Vincent",
      "St. Lucia",
      "Sudan",
      "Suriname",
      "Swaziland",
      "Sweden",
      "Switzerland",
      "Syria",
      "Taiwan",
      "Tajikistan",
      "Tanzania",
      "Thailand",
      `Timor L'Este`,
      "Togo",
      "Tonga",
      "Trinidad &amp; Tobago",
      "Tunisia",
      "Turkey",
      "Turkmenistan",
      "Turks &amp; Caicos",
      "Uganda",
      "Ukraine",
      "United Arab Emirates",
      "United Kingdom",
      "United States",
      "Uruguay",
      "Uzbekistan",
      "Venezuela",
      "Vietnam",
      "Virgin Islands (US)",
      "Yemen",
      "Zambia",
      "Zimbabwe",
    ],
    errorMessages: "",
    name: null,
    address: null,
    city: null,
    state: null,
    zip: null,
    country: null,
    formHasErrors: false,
    date: new Date(Date.now() - new Date().getTimezoneOffset() * 60000)
      .toISOString()
      .substr(0, 10),
    menu: false,
    row: "",

    details: {
      nom: "",
      prénom: "",
      age: "",
      email: "",
      téléphone: "",
      année: "",
      type: "",
      question: "",
    },
  }),

  computed: {
    form() {
      return {
        name: this.name,
        address: this.address,
        city: this.city,
        state: this.state,
        zip: this.zip,
        country: this.country,
      };
    },
  },

  watch: {
    name() {
      this.errorMessages = "";
    },
  },

  methods: {
    addressCheck() {
      this.errorMessages =
        this.address && !this.name ? `Hey! I'm required` : "";

      return true;
    },
    resetForm() {
      this.errorMessages = [];
      this.formHasErrors = false;

      Object.keys(this.form).forEach((f) => {
        this.$refs[f].reset();
      });
    },
    submit() {
      this.formHasErrors = false;

      Object.keys(this.form).forEach((f) => {
        if (!this.form[f]) this.formHasErrors = true;

        this.$refs[f].validate(true);
      });
    },

    async getCountries() {
      try {
        const res = await this.$axios.get(`https://restcountries.com/v2/all`);
        if (res.status === 200) {
          console.log(res.data);
        }
      } catch (error) {
        console.trace(error);
      }
    },
  },
};
</script>

<style lang="scss" scoped>
</style>