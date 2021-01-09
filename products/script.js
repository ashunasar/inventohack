const persons = [
  {
    name: "Farmer Buddy",
    photo: "2.png",
    
    bio:
      "<p>A one of it's kind soil testing device which is well tested and approved for soil analysis measuring 25+ nutrients paramater which includes macro and micro nutrients. Gives a soil health card on 1 acre land in just 15 mins with suggestions and predictions helping Farmers in decision making and knowing Investment and ROI before sowing.Also, includes Real-Time Instructions for Farmers on their GSM phone which if they follow precisely can increase the production of crop by 4 times 100% organically.We are offering this devices to the companies dealing with organic farming, selling, fertilizers, bio-inputs, and food industry.</p>",
    social: {
      facebook: "#",
      twitter: "https://twitter.com/knyttneve",
      linkedin: "#"
    }
  },
  {
    name: "Biokit",
    photo: "biokit.jpg",
    
    bio:
      "<p>Biokit is an organic solution for all problems of your garden. It assists your garden from the stage of sampling till the growth of fruits and vegetables. To make your garden natural and organic and get rid of harmful chemicals and fertilizers Biokit is the best and more efficient solution. Biokit is internationally acclaimed and certified product from Agrilife. It is a DIY pack for 15 big pots for about 3 months if used correctly. Safe to keep in house in a dry place. Safe for kids and animals. It consists of 6 patented microbes which activates to solve different problems namely: 1 Agrilife Kohinoor:- Nutrients and beneficial soil inoculants 2 Rootam Bio:- Seaweed derivatives, Humic and fulvic substance and vitamins for the growth of the roots. 3 Biofit:- Contains spores, mycelia fragments and vegetable cells of the microbial consortia. 4 Derisom:- Pongamia Extract 5 Margosom:- Active neem extract 6 Agrilife Oxyrich:- Oxygen liberating substance How to use : To restore soil health use Oxyrich and Kohinoor. To stimulate the rooting of plants use Rootam Bio, it gives result faster than the chemical fertilizer. To protect plant from insects and disease use Derisom , Margosom , and Biofit.</p>",
    social: {
      facebook: "#",
      twitter: "https://twitter.com/knyttneve",
      linkedin: "#"
    }
  },
  {
    name: "Fresh 24",
    photo: "Fresh.jpg",
    
    bio:
      "<p>A unique project which marks the maximum involvement of Inventohack in farms. Here Inventohack takes the whole farm for working from the beginning from Soil testing, decision making till the selling of the end product. From the area of minimum like 10000 sqft till 500 acres we pick the area for testing and after the result persue as the Soil report guides us. It includes multiple soil testing at different stages and decision making according to real time data. This helps in precision farming of organic produces making the quality and quantity of end product to match upto global standards. Only requirements from the Farmer are Water, Electricity, and Intial working capital for their farm. Farmer may or may not get involved physically on the farm according to his/her choice. Inventohack is already selling organic vegetables and food products with it's partner brand Fresh24 and have daily based customers  of these organic food items. This makes easier to sell the produce on the right price and direct sells of the product cutts off the mediator to make the organic food actually cheaper and more authentic for the end consumer.</p>",
    social: {
      facebook: "#",
      twitter: "https://twitter.com/knyttneve",
      linkedin: "#"
    }
  },
  {
    name: "O-Zone",
    photo: "ozone.jpg",
    
    bio:
      "<p>O-zone which stands for Oxygen Zone is a revolutionary solution for absorbing maximum pollution from atmosphere and increasing oxygen ratio. This includes advance pollution sensors which gives real time data and changes in the levels of pollution and oxygen. By the use of Farmer buddy and these pollution sensor we make a list of suitable pollution absorbing plants which are suitable for that soil and atmosphere. These suitable plants are the essential element of O-Zone along with Live bamboo gazebo which also increases natural beauty and purifies the atmosphere. With fully automatic monitoring system supported by sensors. is best suited for Industries having problem of heavy fees to Pollution Control  Board. People want to decrease pollution of their surrounding parks. Builders interested in making a peace zone in colonies. For big home gardens. And most in Smart Cities for making Smart Parks.</p>",
    social: {
      facebook: "#",
      twitter: "https://twitter.com/knyttneve",
      linkedin: "#"
    }
  },
  {
    name: "Divine",
    photo: "div.jpg",
    
    bio:
      "<p>In our day to day busy life in this digitalized machine world we all require some moments of peace and isolation to arrange our thoughts. In this new age of knowledge we are scratching our basic roots again thus promoting meditation, yoga, dhayana and self isolation. For this Inventohack has launched a perfect idea of room arrangement and automations which our 100% natural and provides the peace of mind with divine aura. A little time in our divine room which we create in a very small place of your house , apartment office , building and society gives an experience of recreation , self development and most importantly peace of mind.</p>",
    social: {
      facebook: "#",
      twitter: "https://twitter.com/knyttneve",
      linkedin: "#"
    }
  }
];

const app = new Vue({
  el: "#app",
  data() {
    return {
      persons: persons,
      selectedPersonIndex: null,
      isSelected: false,
      selectedPerson: null,
      inlineStyles: null,
      isReady: false,
      isOk: false,
      selectedPersonData: {
        name: null,
        title: null,
        photo: null,
        social: {
          facebook: null,
          twitter: null,
          linkedin: null
        }
      }
    };
  },
  methods: {
    selectPerson(index, el) {
      if (!this.isOk) {
        this.selectedPersonIndex = index;
        this.isSelected = true;
        el.target.parentElement.className == "person-details"
          ? (this.selectedPerson = el.target.parentElement.parentElement)
          : (this.selectedPerson = el.target.parentElement);

        this.selectedPerson.classList.add("person-selected");
        this.selectedPerson.setAttribute(
          "style",
          `width:${this.selectedPerson.offsetWidth}px;`
        );
        this.selectedPersonData = this.persons[index];
        window.setTimeout(() => {
          this.inlineStyles = `width:${this.selectedPerson
            .offsetWidth}px;height:${this.selectedPerson
            .offsetHeight}px;left:${this.selectedPerson.offsetLeft}px;top:${this
            .selectedPerson.offsetTop}px;position:fixed`;
          this.selectedPerson.setAttribute("style", this.inlineStyles);
        }, 400);
        window.setTimeout(() => {
          this.isReady = true;
          this.isOk = true;
        }, 420);
      } else {
        this.reset();
      }
    },
    reset() {
      this.isReady = false;
      window.setTimeout(() => {
        this.selectedPerson.classList.add("person-back");
      }, 280);
      window.setTimeout(() => {
        this.selectedPerson.setAttribute("style", "");
      }, 340);
      window.setTimeout(() => {
        this.isSelected = false;
        this.selectedPerson.classList.remove("person-back", "person-selected");
        this.isOk = false;
      }, 400);
    }
  }
});