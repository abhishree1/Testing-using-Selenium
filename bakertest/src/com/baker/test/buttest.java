package com.baker.test;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

public class buttest {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		System.setProperty("webdriver.chrome.driver", "D:\\selenium\\bakertest\\src\\drivers\\chromedriver.exe");
		//WebDriver driver = new ChromeDriver(chromeOptions);
		WebDriver driver = new ChromeDriver();
		driver.get("http://localhost/sqta/cakes.php");
		driver.findElement(By.className("btn.btn-success.btn-lg")).click();
		driver.findElement(By.className("form-control")).sendKeys("ABC");
		driver.findElement(By.id("exampleFormControlTextarea1")).sendKeys("asdas");
		driver.findElement(By.className("btn.btn-success")).click();

	}

}
