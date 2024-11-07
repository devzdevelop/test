document.addEventListener("DOMContentLoaded", function () {
  let skillIndex = document.querySelectorAll(".skill-item").length;
  const wrapper = document.getElementById("team-skills-wrapper");
  const addButton = document.getElementById("add-skill");

  addButton.addEventListener("click", function () {
    const newSkill = document.createElement("div");
    newSkill.classList.add("skill-item");
    newSkill.style.marginBottom = "20px";
    newSkill.innerHTML = `
          <label>Skill Name:</label>
          <input type="text" name="skills[${skillIndex}][name]" style="width: 100%;" />
          <label>Skill Description:</label>
          <textarea name="skills[${skillIndex}][description]" style="width: 100%;"></textarea>
          <button type="button" class="remove-skill">Remove Skill</button>
      `;
    wrapper.appendChild(newSkill);
    skillIndex++;

    newSkill
      .querySelector(".remove-skill")
      .addEventListener("click", function () {
        newSkill.remove();
      });
  });

  document.querySelectorAll(".remove-skill").forEach((button) => {
    button.addEventListener("click", function () {
      button.closest(".skill-item").remove();
    });
  });
});
