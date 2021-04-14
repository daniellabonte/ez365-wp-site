try {
wp.blocks.registerBlockType('ezblocks/section-banner', {
  title: 'Section Banner',
  icon: 'smiley',
  category: 'common',
  attributes: {
    title: {
      type: 'string',
    },
    backgroundImageUri: {
      type: 'string',
    },
  },
  edit: (props) => {

    return (
      wp.element.createElement("input", {
        value: props.attributes.title,
        onChange: ({
          target
        }) => props.setAttributes({
          title: target.value
        })
      })
    )
  },
  save: (props) => {
    return (
      wp.element.createElement("div", {
        class: "py-5 text-center section-dark",
        style: "background-image: url(assets/app/pattern-3232784_1920b.jpg);"
      }, wp.element.createElement("div", {
        class: "container py-5"
      }, wp.element.createElement("div", {
        class: "row"
      }, wp.element.createElement("div", {
        class: "col-md-12"
      }, wp.element.createElement("h2", {
        class: "mb-0 text-white stretch text-uppercase"
      }, props.attributes.title)))))
    )
  },
});
} catch (e) {
  console.error(e);
}