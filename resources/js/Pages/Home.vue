<template>
  <v-app>
    <v-main class="home">
      <header class="home__banner">
        <nav class="home__nav">
          <div class="home__nav__brand">
            <img src="/storage/logo-2.png" alt="" srcset="" />
          </div>
          <ul class="home__nav__links">
            <li><a href="#about" v-smooth-scroll>À propos</a></li>
            <li><a href="#apply" v-smooth-scroll>Pré-Inscription</a></li>
            <!-- <li><a href="#">Contact</a></li> -->
          </ul>
        </nav>
        <section class="home__banner__cta">
          <article>
            <h1
              data-aos="fade-up"
              data-aos-duration="1200"
              data-aos-anchor-placement="bottom-bottom"
            >
              Mastercard Foundation Scholars Program a A.D.U.!
            </h1>
            <p
              data-aos="fade-up"
              data-aos-duration="1500"
              data-aos-anchor-placement="bottom-bottom"
            >
              Les « Scholars Program Partners » de la Fondation Mastercard est
              une initiative mondiale visant à éduquer et à former la prochaine
              génération de leaders qui contribueront au progrès social et
              économique du continent Africain. La Mastercard Foundation et
              L’African Development Universalis (A.D.U.) ont le plaisir de vous
              annoncer les bourses Mastercard Foundation Scholars Program à
              A.D.U.
            </p>
          </article>
        </section>
        <section class="home__banner__icon">
          <a href="#about">
            <v-icon>mdi-arrow-down-bold</v-icon>
          </a>
        </section>
      </header>
      <section class="home__about" id="about">
        <main class="home__about__description">
          <section class="home__about__description__left">
            <article>
              <div
                class="about-title"
                data-aos="fade-up"
                data-aos-duration="1200"
                data-aos-anchor-placement="bottom-bottom"
              >
                <h1 class="">À propos</h1>
                <div class="line">
                  <div class="line__kite"></div>
                  <div class="line__main"></div>
                  <div class="line__kite"></div>
                </div>
              </div>
              <!-- <p>
                Les « Scholars Program Partners » de la Fondation Mastercard est
                une initiative mondiale visant à éduquer et à former la
                prochaine génération de leaders qui contribueront au progrès
                social et économique du continent Africain. La Mastercard
                Foundation et L’African Development Universalis (A.D.U.) ont le
                plaisir de vous annoncer les bourses Mastercard Foundation
                Scholars Program à A.D.U.
              </p> -->
              <p
                class="about-title"
                data-aos="fade-up"
                data-aos-duration="1300"
                data-aos-anchor-placement="bottom-bottom"
              >
                Ce programme offre une bourse d’études complète aux étudiants,
                cette bourse permet à des jeunes issus de communautés
                économiquement défavorisées, qui ont fait preuve de talent
                scolaire et de potentiel de leadership, d'accéder à une
                éducation de qualité et pertinente. Le Mastercard Foundation
                Scholars Program fournit un soutien financier, social,
                académiques et dispose d’un de soutien complet comprenant un
                éventail de services de mentorat et accompagne leur transition
                vers des opportunités d’emploi et entreprenariat.
              </p>
              <p
                class="about-title"
                data-aos="fade-up"
                data-aos-duration="1400"
                data-aos-anchor-placement="bottom-bottom"
              >
                Ce programme qui n’est par ailleurs implémenté que dans de
                prestigieuses universités comme : Stanford, Berkeley et
                Wellesley aux Etats Unis; Université de Toronto et McGill au
                Canada; Sciences Po en France; Universite de Cape Town,
                Makerere, Ashesi et ALU en Afrique, Et est porté en Afrique
                francophone avec l’université Gaston Berger au Sénégal, 2iE au
                Burkina Faso et A.D.U. au Niger.
              </p>
            </article>
          </section>
          <section class="home__about__description__right">
            <article>
              <div
                class="about-title"
                data-aos="fade-up"
                data-aos-duration="1200"
                data-aos-anchor-placement="bottom-bottom"
              >
                <h1 class="">La bourse</h1>
                <div class="line">
                  <div class="line__kite"></div>
                  <div class="line__main"></div>
                  <div class="line__kite"></div>
                </div>
              </div>
              <ul
                class="about-title"
                data-aos="fade-up"
                data-aos-duration="1300"
                data-aos-anchor-placement="bottom-bottom"
              >
                <li>Les frais de scolarité</li>
                <li>L’hébergement</li>
                <li>Matériels scolaires</li>
                <li>Transport</li>
                <li>Allocations mensuelles</li>
              </ul>

              <div
                class="about-title"
                data-aos="fade-up"
                data-aos-duration="1200"
                data-aos-anchor-placement="bottom-bottom"
              >
                <h1 class="">Les critères</h1>
                <div class="line">
                  <div class="line__kite"></div>
                  <div class="line__main"></div>
                  <div class="line__kite"></div>
                </div>
              </div>
              <ul
                class="about-title"
                data-aos="fade-up"
                data-aos-duration="1300"
                data-aos-anchor-placement="bottom-bottom"
              >
                <li>
                  Posséder un BAC ou un diplôme équivalent avec un excellent
                  parcours académique.
                </li>
                <li>Démontrer un besoin clair de soutien financier</li>
              </ul>

              <div
                class="about-title"
                data-aos="fade-up"
                data-aos-duration="1200"
                data-aos-anchor-placement="bottom-bottom"
              >
                <h1 class="">Programmes</h1>
                <div class="line">
                  <div class="line__kite"></div>
                  <div class="line__main"></div>
                  <div class="line__kite"></div>
                </div>
              </div>
              <ul
                class="about-title"
                data-aos="fade-up"
                data-aos-duration="1300"
                data-aos-anchor-placement="bottom-bottom"
              >
                <li>Droit privé</li>
                <li>
                  Business Administration (Comptabilité, Gestion, Systèmes
                  d’information, Marketing, Ressources Humaines…
                </li>
                <li>Intelligence Artificielle (Informatique)</li>
              </ul>
            </article>
          </section>
        </main>
      </section>

      <section class="home__apply" id="apply">
        <h1 class="home__apply__title">Pré-Inscription</h1>
        <div class="home__apply__form__wrapper">
          <v-card class="form-card">
            <form @submit.prevent="apply()">
              <v-row>
                <v-col cols="12" sm="12" md="6" lg="6">
                  <v-text-field
                    ref="nom"
                    v-model="details.nom"
                    label="Nom"
                    placeholder="Nom"
                    :error-messages="detailErrors.nom"
                    outlined
                  ></v-text-field>
                </v-col>
                <v-col cols="12" sm="12" md="6" lg="6">
                  <v-text-field
                    ref="prénom"
                    v-model="details.prénom"
                    label="Prénom"
                    placeholder="Prénom"
                    :error-messages="detailErrors.prénom"
                    outlined
                  ></v-text-field>
                </v-col>
              </v-row>

              <v-row>
                <v-col cols="12" sm="12">
                  <v-menu
                    ref="menu"
                    :close-on-content-click="false"
                    :return-value.sync="details.age"
                    transition="scale-transition"
                    offset-y
                    min-width="auto"
                  >
                    <template v-slot:activator="{ on, attrs }">
                      <v-text-field
                        label="Age"
                        readonly
                        v-bind="attrs"
                        v-on="on"
                        v-model="details.age"
                        :error-messages="detailErrors.age"
                        outlined
                      ></v-text-field>
                    </template>
                    <v-date-picker
                      v-model="details.age"
                      no-title
                      scrollable
                      :locale="locale"
                    >
                      <v-spacer></v-spacer>

                      <v-btn
                        text
                        color="primary"
                        @click="$refs.menu.save(details.age)"
                      >
                        OK
                      </v-btn>
                    </v-date-picker>
                  </v-menu>
                </v-col>
              </v-row>

              <v-row>
                <v-col cols="12" sm="12" md="6" lg="6">
                  <v-text-field
                    ref="email"
                    v-model="details.email"
                    label="E-mail"
                    placeholder="E-mail"
                    :error-messages="detailErrors.email"
                    outlined
                  ></v-text-field>
                </v-col>
                <v-col cols="12" sm="12" md="6" lg="6">
                  <v-row>
                    <v-col cols="5" sm="5">
                      <v-select
                        ref="country"
                        v-model="details.code"
                        :items="callingCodes"
                        item-text="flag"
                        item-value="code"
                        label="Code"
                        :error-messages="detailErrors.code"
                        outlined
                      >
                        <template v-slot:selection="data">
                          <div class="country-code">
                            <div>
                              <img :src="data.item.flag" alt="flag" srcset="" />
                            </div>
                            <span class="">{{ data.item.code }}</span>
                          </div>
                        </template>
                        <template v-slot:item="data">
                          <div class="country-code">
                            <div>
                              <img :src="data.item.flag" alt="flag" srcset="" />
                            </div>
                            <span class="">{{ data.item.code }}</span>
                          </div>
                        </template>
                      </v-select>
                    </v-col>
                    <v-col cols="7" sm="7">
                      <v-text-field
                        ref="téléphone"
                        v-model="details.téléphone"
                        label="Numéro de téléphone"
                        placeholder="Numéro de téléphone"
                        :error-messages="detailErrors.téléphone"
                        outlined
                      >
                      </v-text-field>
                    </v-col>
                  </v-row>
                </v-col>
              </v-row>

              <v-row>
                <v-col cols="12" sm="12" md="6" lg="6">
                  <v-autocomplete
                    ref="country"
                    v-model="details.année"
                    :items="getYears"
                    label="Année du BAC"
                    placeholder="Select..."
                    :error-messages="detailErrors.année"
                    outlined
                  ></v-autocomplete>
                </v-col>
                <v-col cols="12" sm="12" md="6" lg="6">
                  <v-autocomplete
                    ref="country"
                    v-model="details.type"
                    :items="bacs"
                    label="Type de BAC"
                    placeholder="Select..."
                    :error-messages="detailErrors.type"
                    outlined
                  ></v-autocomplete>
                </v-col>
              </v-row>

              <v-row>
                <v-col cols="12" sm="12">
                  <p class="v-label">
                    Etes-vous actuellement inscrit dans une université ou
                    institut ?
                  </p>
                  <v-radio-group
                    v-model="details.question"
                    row
                    :error-messages="detailErrors.question"
                  >
                    <v-radio label="Oui" value="Oui"></v-radio>
                    <v-radio label="Non" value="Non"></v-radio>
                  </v-radio-group>
                </v-col>
              </v-row>
              <v-row v-if="details.question === 'Oui'">
                <v-col cols="12" sm="12">
                  <v-text-field
                    ref="école"
                    v-model="details.école"
                    label="Si oui, laquelle?"
                    placeholder="Si oui, laquelle?"
                    :error-messages="detailErrors.école"
                    outlined
                  ></v-text-field>
                </v-col>
              </v-row>

              <v-scale-transition>
                <div class="s-alert">
                  <v-alert
                    type="success"
                    dismissible
                    width="90%"
                    v-show="submitted"
                  >
                    Votre demande a été soumise avec succès.
                  </v-alert>
                </div>
              </v-scale-transition>
              <v-divider class="mt-12"></v-divider>
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn
                  type="submit"
                  color="primary"
                  large
                  :loading="isSubmitting"
                  block
                >
                  Soumettre
                </v-btn>
                <v-spacer></v-spacer>
              </v-card-actions>
            </form>
          </v-card>
        </div>
      </section>
    </v-main>
  </v-app>
</template>

<script>
export default {
  name: "Home",
  computed: {
    getYears() {
      const now = new Date().getUTCFullYear();
      return Array(now - (now - 22))
        .fill("")
        .map((v, idx) => now - idx);
    },
  },
  watch: {},

  beforeCreate() {
    this.$nextTick(() => {
      this.getCountries();
    });
  },
  created() {
    // console.log(window.navigator.language);
  },
  data: () => ({
    bacs: ["BAC A", "BAC B", "BAC C", "BAC D", "BAC E", "BAC F", "BAC G"],
    menu: false,
    isSubmitting: false,
    submitted: false,
    locale: "",
    callingCodes: [],
    details: {
      nom: "",
      prénom: "",
      age: new Date(Date.now() - new Date().getTimezoneOffset() * 60000)
        .toISOString()
        .substr(0, 10),
      email: "",
      code: "+227",
      téléphone: "",
      année: "",
      type: "",
      question: "",
      école: "",
    },
    detailErrors: {
      nom: "",
      prénom: "",
      age: "",
      email: "",
      code: "",
      téléphone: "",
      année: "",
      type: "",
      question: "",
      école: "",
    },
  }),

  methods: {
    apply() {
      this.isSubmitting = true;
      this.setErrors();
      this.$inertia.post(
        "/dashboard/apply",
        {
          ...this.details,
          age: new Date(this.details.age).toISOString(),
          téléphone: this.details.téléphone
            ? `${this.details.code}${this.details.téléphone}`
            : "",
        },
        {
          preserveScroll: true,
          errorBag: "applicationError",
          onSuccess: (page) => {
            this.setForm();
            this.isSubmitting = false;
            this.submitted = true;
          },
          onError: (err) => {
            this.isSubmitting = false;
            this.setErrors(err);
          },
        }
      );
    },
    setErrors(err = {}) {
      this.detailErrors = {
        nom: err.nom || "",
        prénom: err.prénom || "",
        age: err.age || "",
        email: err.email || "",
        code: err.code || "",
        téléphone: err.téléphone || "",
        année: err.année || "",
        type: err.type || "",
        question: err.question || "",
        école: err.école || "",
      };
    },
    setForm() {
      this.details = {
        nom: "",
        prénom: "",
        age: new Date(Date.now() - new Date().getTimezoneOffset() * 60000)
          .toISOString()
          .substr(0, 10),
        email: "",
        code: "+227",
        téléphone: "",
        année: "",
        type: "",
        question: "",
        école: "",
      };
    },
    async getCountries() {
      try {
        const res = await this.$axios.get(
          `https://restcountries.com/v2/all?fields=flag,callingCodes`
        );
        if (res.status === 200) {
          this.callingCodes = res.data.map((c) => {
            return {
              flag: c.flag,
              code: `+${c.callingCodes[0]}`,
            };
          });
        }
      } catch (error) {
        console.trace(error);
      }
    },
  },
};
</script>

<style lang="scss" scoped>
.country-code {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  & > div {
    width: 20px;
    height: 15px;
    margin-right: 0.5rem;
    & > img {
      width: 100%;
      height: 100%;
    }
  }
}
</style>