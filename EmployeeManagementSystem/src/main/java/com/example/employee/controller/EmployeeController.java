package com.example.employee.controller;

import com.example.employee.entity.Employee;
import com.example.employee.repository.EmployeeRepository;

import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.servlet.mvc.support.RedirectAttributes;

@Controller
public class EmployeeController {
	
	@Autowired
	private EmployeeRepository employeeRepository;
	
	@GetMapping("/")
	public String index(Model model) {
	    model.addAttribute("employees", employeeRepository.findAll());
	    model.addAttribute("employee", new Employee()); // Ensure this is added
	    return "index";
	}
	
	@PostMapping("/addEmployee")
	public String addEmployee(@ModelAttribute Employee employee) {
	    employeeRepository.save(employee);
	    return "redirect:/";
	}
	
	@PostMapping("/deleteEmployee/{id}")
	 public String deleteEmployee(@PathVariable Long id, RedirectAttributes redirectAttributes) {
        Optional<Employee> employee = employeeRepository.findById(id);

        if (employee.isPresent()) {
            employeeRepository.deleteById(id);
            redirectAttributes.addFlashAttribute("message", "Employee deleted successfully!");
        } else {
            redirectAttributes.addFlashAttribute("error", "No employee found to delete.");
        }
        return "redirect:/";
	}
}
