var svg = d3.select("body").append("svg")
  .attr("width", 200)
  .attr("height", 200)

svg.append("circle")
  .attr("cx", 100)
  .attr("cy", 100)
  .attr("r", 50)
  .attr("stroke", "black")
  .attr("fill", "#69a3b2")


d3.json("/data/db_data.json").then(function(data){
  console.log(data[0].student);
});
