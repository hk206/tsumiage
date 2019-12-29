<template>
  <v-app id="inspire">
    <v-card
      class="mx-auto mb-10"
    　width="1000"
      outlined
    >
    <v-list-item three-line>
    <v-list-item-avatar
          tile
          size="150"
          color="grey"
        ></v-list-item-avatar>
        <v-list-item-content>
          <div class="overline mb-4">プロフィール</div>
          <v-list-item-title class="headline mb-1">{{ user.name }}</v-list-item-title>
        </v-list-item-content>
        <v-list-item-content>
          <div class="overline mb-4">ひとこと</div>
          <v-list-item-subtitle>{{ user.introduce }}</v-list-item-subtitle>
        </v-list-item-content>
      </v-list-item>
    </v-card>
    <v-card
    max-width="800"
    class="mx-auto"
  >
    <v-list three-line>
      <template v-for="item in projects">
        <v-list-item
          :key="item.id"
          :id="item.id"
          @click="showDetailById"
        >

          <v-list-item-content>
            <v-list-item-title v-html="item.title"></v-list-item-title>
            <v-list-item-subtitle v-html="item.outline"></v-list-item-subtitle>
          </v-list-item-content>
        </v-list-item>
      </template>
    </v-list>
  </v-card>
  </v-app>
</template>

<script>
export default {
  data () {
    return{
      showDetail: 'false',
    }
  },
  async asyncData({ $axios, params }) {
  const responseUser = await $axios.get(`http://nginx:81/user/${params.id}`)
  const responseProject = await $axios.get(`http://nginx:81/project/user/${params.id}`)
  console.log(responseUser.data);
  return { user: responseUser.data, projects:responseProject.data }
  },
   methods: {
    　async showDetailById(e) {
      console.log(e.currentTarget.id);
      this.showDetail = 'true';
      console.log(this.showDetail);
      const {response} = await this.$axios.$get(`http://nginx:81/project/${e.currentTarget.id}`)
      console.log(response);
    },
  },
}
</script>