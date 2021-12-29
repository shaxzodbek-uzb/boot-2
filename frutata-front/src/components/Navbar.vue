<template>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img class="navbar__brand" src="@/assets/logo/frulogo.svg" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <component
              v-for="(item, idx) in items"
              :key="idx"
              :is="item.children ? 'NavNestedItem' : 'NavItem'"
              :item="item"
              @active="item.isActive = true"
            />
          </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDropdown2">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link ps-0" href="#"
                ><i
                  style="color: white; background: #93c92b"
                  class="fab fa-instagram"
                ></i
              ></a>
              <a class="nav-link" href="#"
                ><i
                  style="color: white; background: #93c92b"
                  class="fab fa-facebook-f"
                ></i
              ></a>
              <a class="nav-link" href="#"
                ><i
                  style="color: white; background: #93c92b"
                  class="fab fa-youtube"
                ></i
              ></a>
            </li>
            <li class="nav-item" id="navflex">
              <a class="nav-link pb-0" id="fome" href="#">Связаться с нами</a>
              <a class="nav-link pt-0" href="#">+998 90 995 5959</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</template>

<script>
import NavItem from "./Navigation/Item";
import NavNestedItem from "./Navigation/NestedItem";

export default {
  components: { NavItem, NavNestedItem },
  data() {
    return {
      items: [
        {
          title: "Главная",
          link: "#",
          isActive: true,
          children: [
            {
              title: "Главная",
              link: "#",
              isActive: true,
            },
            {
              title: "Главная",
              link: "#",
              isActive: true,
            },
            {
              title: "Главная",
              link: "#",
              isActive: true,
            },
          ],
        },
        {
          title: "О компании",
          link: "#",
          isActive: false,
        },
        {
          title: "Продукции",
          link: "#",
          isActive: false,
        },
        {
          title: "Контакты",
          link: "#",
          isActive: false,
        },
        {
          title: "Главная1",
          link: "#",
          isActive: false,
          children: [
            {
              title: "Главная",
              link: "#",
              isActive: true,
            },
            {
              title: "Главная",
              link: "#",
              isActive: true,
            },
            {
              title: "Главная",
              link: "#",
              isActive: true,
            },
          ],
        },
      ],
    };
  },
};
</script>
