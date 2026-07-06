export const initDataService = () => {
  const fetchBlogData = async () => {
    try {
      const response = await fetch("assets/data/data.json");
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return await response.json();
    } catch (error) {
      console.error("Fout bij het laden van blog data:", error);
      return [];
    }
  };

  return { fetchBlogData };
};
